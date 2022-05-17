<?php

namespace App\Services;

use App\Models\Wind;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class WeatherService
{

    protected string $apiKeyName;
    protected string $apiKeyValue;
    protected string $apiBaseUrl;

    public function __construct()
    {
        $this->apiKeyName = config::get('api.api_key_name');
        $this->apiKeyValue = config::get('api.api_key_value');
        $this->apiBaseUrl = config::get('api.api_base_url');
    }

    /**
     * @param string $city
     * @return string
     */
    public function buildApiUrl(string $city): string
    {
        $url[] = $this->apiBaseUrl;
        $url[] = $city;
        $url[] = "&";
        $url[] = $this->apiKeyName;
        $url[] = "=";
        $url[] = $this->apiKeyValue;

        return implode("", $url);
    }

    /**
     * @param string $url
     * @return \Illuminate\Http\Client\Response
     */
    public function getRequest(string $url): \Illuminate\Http\Client\Response
    {
        return Http::get($url);
    }

    /**
     * @param string $city
     * @return mixed
     */
    public function process(string $city): mixed
    {
        $url = $this->buildApiUrl($city);
        $response = json_decode($this->getRequest($url), true);
        $cod = $response['cod'];

        return $response['cod'] === 200 ? $this->parseResponse($response) : $response;
    }

    /**
     * @param array $response
     * @return array
     */
    public function parseResponse(array $response): array
    {
        return [
            "name" => $response['name'],
            "cod" => $response['cod'],
            "main" => $response['weather'][0]['main'],
            "description" => $response['weather'][0]['description'],
            "icon" => $this->buildIconUrl($response['weather'][0]['icon']),

            "temp_c" => $this->convertKelvinToCelsius($response['main']['temp']) . " °C",
            "temp_feels_like_c" => $this->convertKelvinToCelsius($response['main']['feels_like']) . " °C",

            "temp_k" => $this->convertKelvinToFahrenheit($response['main']['temp']) . " °F",
            "temp_feels_like_k" => $this->convertKelvinToFahrenheit($response['main']['feels_like']) . " °F",

            "wind_speed" => $response['wind']['speed'] . " м/с",
            "wind_direction" => $this->windDirection($response['wind']['deg']),
            "pressure" => $this->convertPascalToMercury($response['main']['pressure']) . " мм рт.",
            "humidity" => $response['main']['humidity'] . " %",
        ];
    }

    public function windDirection(float $deg)
    {
        $translation = "неопределенный";

        if (!is_numeric($deg)) {
            return $translation;
        }

        if ($deg >= 348.75) {
            return 'северный';
        }

        $directions = Wind::translateWindDirection($lang = 'ru');

        foreach ($directions as $key => $direction) {
            list($min, $max) = $direction['range'];
            if ($deg >= (float)$min && $deg <= (float)$max) {
                $translation = $direction['translate'][$lang];
                break;
            }
        }

        return $translation;
    }

    /**
     * @param float $pressure
     * @return float
     */
    public function convertPascalToMercury(float $pressure): float
    {
        return round(($pressure * 0.750062), 2);
    }

    /**
     * @param float $degreesKelvin
     * @return float
     */
    public function convertKelvinToCelsius(float $degreesKelvin): float
    {
        $tempCelsius = $degreesKelvin - 273.15;
        return round($tempCelsius, 1);
    }

    public function convertKelvinToFahrenheit(float $degreesKelvin): float
    {
        $tempFahrenheit = ($degreesKelvin - 273.15) * 1.8000 + 32;
        return round($tempFahrenheit, 1);
    }

    public function convertFahrenheitToCelsius(float $degreesFahrenheit)
    {
        $tempCelsius = ($degreesFahrenheit - 32) * (5 / 9);
        return round($tempCelsius, 1);
    }

    public function buildIconUrl(string $icon)
    {
        return "http://openweathermap.org/img/wn/{$icon}@2x.png";
    }
}

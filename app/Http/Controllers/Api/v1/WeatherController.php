<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{

    protected WeatherService $service;

    public function __construct(WeatherService $service)
    {
        $this->service = $service;
    }

    /**
     * @param string $city
     * @return mixed
     */
    public function show(string $city): mixed
    {
        return $this->service->process($city);
    }

}

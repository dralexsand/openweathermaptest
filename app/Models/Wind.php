<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wind extends Model
{
    use HasFactory;

    public static function translateWindDirection()
    {
        return [
            "N" => [
                'translate' => [
                    'ru' => 'северный'
                ],
                'range' => [348.75, 11.25]
            ],
            "NNE" => [
                'translate' => [
                    'ru' => 'северо-северо-восточный'
                ],
                'range' => [11.25, 33.75]
            ],
            "NE" => [
                'translate' => [
                    'ru' => 'северо-восточный'
                ],
                'range' => [33.75, 56.25]
            ],
            "ENE" => [
                'translate' => [
                    'ru' => 'восточно-северо-восточный'
                ],
                'range' => [56.25, 78.75]
            ],
            "E" => [
                'translate' => [
                    'ru' => 'восточный'
                ],
                'range' => [78.75, 101.255]
            ],
            "ESE" => [
                'translate' => [
                    'ru' => 'восточно-юго-восточный'
                ],
                'range' => [101.25, 123.75]
            ],
            "SE" => [
                'translate' => [
                    'ru' => 'юго-восточный'
                ],
                'range' => [123.75, 146.25]
            ],
            "SSE" => [
                'translate' => [
                    'ru' => 'юго-юго-восточный'
                ],
                'range' => [123.75, 146.25]
            ],
            "S" => [
                'translate' => [
                    'ru' => 'южный'
                ],
                'range' => [168.75, 191.25]
            ],
            "SSW" => [
                'translate' => [
                    'ru' => 'юго-юго-западный'
                ],
                'range' => [191.25, 213.75]
            ],
            "SW" => [
                'translate' => [
                    'ru' => 'юго-западный'
                ],
                'range' => [213.75, 236.25]
            ],
            "WSW" => [
                'translate' => [
                    'ru' => 'западно-юго-западный'
                ],
                'range' => [236.25, 258.75]
            ],
            "W" => [
                'translate' => [
                    'ru' => 'западный'
                ],
                'range' => [258.75, 281.25]
            ],
            "WNW" => [
                'translate' => [
                    'ru' => 'западно-северо-западный'
                ],
                'range' => [281.25, 303.75]
            ],
            "NW" => [
                'translate' => [
                    'ru' => 'северо-западный'
                ],
                'range' => [303.75, 326.25]
            ],
            "NNW" => [
                'translate' => [
                    'ru' => 'северо-северо-западный'
                ],
                'range' => [326.25, 348.75]
            ],
        ];
    }
}

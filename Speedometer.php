<?php

Class Speedometer

{
    public const MILES_TO_KM_CONVERSION = 1.609;

    public static function convertKmToMiles(float $kilometers): ?float
    {   
    return $kilometers / self::MILES_TO_KM_CONVERSION;
    }

    public static function convertMilesToKm(float $miles): ?float
    {   
    return $miles * self::MILES_TO_KM_CONVERSION;
    }
}

echo Speedometer::convertKmToMiles(10) . PHP_EOL;
//la méthode retournera 6,21
echo Speedometer::convertMilesToKm(10); 
//la méthode retournera 16,09

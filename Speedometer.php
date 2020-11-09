<?php


class Speedometer
{
    const kmMilesRatio = 0.621;

    public static function convertKmToMiles(float $km) : float
    {
        return round  ($km * self::kmMilesRatio, 2);
    }

    public static function convertMilesToKm(float $miles) : float
    {
        return round  ($miles / self::kmMilesRatio,2);
    }

}
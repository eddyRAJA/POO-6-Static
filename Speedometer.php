<?php

class Speedometer
{

    public const MILE_TO_KMS = 1.60934;
    public const KMS_TO_MILE = 0.6215;


    public static function mileToKmsConvert(float $mileLonger) : ?float
    {
        return $mileLonger * self::MILE_TO_KMS;
    }

    public static function kmsToMileConvert(float $kmsLonger) : ?float
    {
        return $kmsLonger * self::KMS_TO_MILE;
    }

}
<?php

namespace App\Helper;

class ConvertGender
{
    public static function genderToString($genderCode)
    {
        switch ($genderCode) {
            case 1:
                return 'Laki-laki';
            case 2:
                return 'Perempuan';
            default:
                return 'Laki-laki';
        }
    }
}
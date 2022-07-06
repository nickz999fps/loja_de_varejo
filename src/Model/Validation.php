<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name):bool
    {
        return mb_strlen($name) > 4;
    }


    public static function validateNumber(float $number):bool
    {
       return $number > 0;
    }

    public static function validateQuantity(int $quantity):bool
    {
        return $quantity > 0;
    }

    public static function validatecnpj(int $cnpj):bool
    {
        return $cnpj > 14;
    }

    public static function validatephone(int $phone):bool
    {
        return $phone > 10;
    }

    public static function validateaddress(int $address):bool
    {
        return mb_strlen($address) > 10;
    }
    
}
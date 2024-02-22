<?php

namespace Oyta\OytaNg\Http;

class Rand
{
    public static function randing(){
        $chars = '123456789abcdefghjklmnopqrstuvwxyz';
        $key = substr(str_shuffle($chars), 0, 32);
        return $key;
    }
}
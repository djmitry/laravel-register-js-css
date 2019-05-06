<?php
namespace Djmitry\RegisterJsCss;

use Illuminate\Support\ServiceProvider;

class RegisterJsCssHelper
{
    public static $data;

    public static function add(Array $data, $position = 'all')
    {
        if (isset(self::$data[$position])) {
            self::$data[$position] = $data;
        } else {
            self::$data = $data;
        }
    }

    public static function show(Array $data, $position = 'all')
    {
        if (isset(self::$data[$position])) {
            foreach ($data[$position] as $key => $value) {
                echo $value;
            }
        }
    }
}
<?php
namespace Djmitry\RegisterJsCss;

class RegisterJsCssHelper
{
    public static $data;

    public static function add(Array $data, string $position = 'all')
    {
        if (isset(self::$data[$position])) {
            self::$data[$position] = array_merge(self::$data[$position], $data);
        } else {
            self::$data = [$position => $data];
        }
    }

    public static function show(string $position = 'all')
    {
        if (empty($position)) {
            $position = 'all';
        }
        
        $result = '';
        if (isset(self::$data[$position])) {
            foreach (self::$data[$position] as $key => $value) {
                $result .= $value;
            }
        }
        return $result;
    }
}
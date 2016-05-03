<?php

if (!function_exists('get'))
{
    /**
     * @param $param1
     * @param $param2
     * @return mixed
     */
    function get($param1 , $param2 )
    {
        return empty($param1) ? $param2 : $param1;
    }
}

if (!function_exists('isAssoc')) {
    /**
     * @param array $arr
     * @return bool
     */
    function isAssoc($arr)
    {
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}


if (! function_exists('is_int_val'))
{
    /**
     * @param $number
     * @return bool
     */
    function is_int_val($number)
    {
        return (string)(int)$number == $number;
    }
}

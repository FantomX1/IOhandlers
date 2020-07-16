<?php

namespace fantomx1;

/**
 * Class RequestAdapter
 * @package fantomx1
 */
class RequestAdapter implements RequestAdapterInterface
{


    /**
     * @param string $key
     * @param string $default
     * @return string
     */
    public static function get(string $key, string $default = ''):string
    {

        return $_REQUEST[$key] ??  $default;

    }


    /**
     * @param string $key
     * @param string $value
     * @return string
     */
    public static function set(string $key, string $value):string
    {

        return $_REQUEST[$key] = $value;

    }

}

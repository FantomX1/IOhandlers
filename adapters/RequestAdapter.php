<?php

namespace fantomx1\iohandlers\adapters;

use fantomx1\iohandlers\AdapterInterface;
use fantomx1\iohandlers\InputAdapterInterface;

/**
 * Class RequestAdapter
 * @package fantomx1
 */
class RequestAdapter implements InputAdapterInterface, AdapterInterface
{


    /**
     * @param string $key
     * @param string $default
     * @return string
     */
    public static function get(string $key,  $default = '')
    {

        return $_REQUEST[$key] ??  $default;

    }


    /**
     * @param string $key
     * @param string $value
     * @return string
     */
    public static function set(string $key,  $value)
    {

        return $_REQUEST[$key] = $value;

    }

}

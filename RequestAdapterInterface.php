<?php

namespace fantomx1;

/**
 * Interface RequestAdapterInterface
 * @package fantomx1
 */
interface RequestAdapterInterface
{


    /**
     * @param string $key
     * @param string $default
     * @return string
     */
    public static function get(string  $key, string $default = ''):string;

    /**
     * @param string $key
     * @param string $value
     * @return string
     */
    public static function set(string $key, string $value):string;

}

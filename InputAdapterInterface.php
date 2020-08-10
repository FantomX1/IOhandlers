<?php

namespace fantomx1\iohandlers;

/**
 * Interface InputAdapterInterface
 * @package fantomx1
 */
interface InputAdapterInterface
{


    /**
     * @param string $key
     * @param string $default
     * @return string
     */
    public static function get(string  $key,  $default = '');

    /**
     * @param string $key
     * @param string $value
     * @return string
     */
    public static function set(string $key,  $value);

}

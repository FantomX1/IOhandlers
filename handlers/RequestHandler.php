<?php

namespace fantomx1\iohandlers\handlers;

use fantomx1\iohandlers\AbstractHandler;

use fantomx1\iohandlers\adapters\RequestAdapter;
use fantomx1\iohandlers\InputAdapterInterface;

/**
 * Class RequestHandler
 * @package fantomx1
 */
class RequestHandler extends AbstractHandler implements InputAdapterInterface
{

    /*
     *
     */
    public static $adapter;



    // @TODO: put into trait sharable inside decomposed libraries which are usable directly also
    // alone
    /**
     * @return mixed
     */
    public static function getAdapter()
    {
        if (!isset(static::$adapter)) {
            static::$adapter = new RequestAdapter();
        }

        return static::$adapter;
    }


    /**
     * @param string|string $key
     * @param string $default
     * @return string|void
     */
    public static function get(string $key,  $default = '')
    {

        return static::getAdapter()::get($key, $default);

    }


    /**
     * @param string|string $key
     * @param string|string $value
     * @return string|void
     */
    public static function set(string $key,  $value)
    {
        static::getAdapter()::set($key, $value);
    }

}

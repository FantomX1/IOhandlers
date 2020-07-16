<?php

namespace fantomx1;

/**
 * Class RequestHandler
 * @package fantomx1
 */
class RequestHandler implements RequestAdapterInterface
{


    public static $adapter;

    /**
     * @param RequestAdapterInterface $adapter
     */
    public static function setAdapter(RequestAdapterInterface $adapter) {
        static::$adapter = $adapter;
    }


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
    public static function get(string $key, string $default = ''):string
    {


        return static::getAdapter()::get($key, $default);



    }


    /**
     * @param string|string $key
     * @param string|string $value
     * @return string|void
     */
    public static function set(string $key, string $value):string
    {
        static::getAdapter()::set($key, $value);
    }

}

<?php


namespace fantomx1\handlers;


use fantomx1\iohandlers\AdapterInterface;
use fantomx1\iohandlers\InputAdapterInterface;

class AbstractHandler
{


    public static $adapter;

    /**
     * @param InputAdapterInterface $adapter
     */
    public static function setAdapter(AdapterInterface $adapter) {
        static::$adapter = $adapter;
    }

}

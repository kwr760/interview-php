<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/30/2015
 * Time: 12:06 AM
 */

namespace Creation\Singleton;

class RemoteConnection
{
    private $con;
    private static $rc = null;

    private function __contruct($c)
    {
        $this->con = $c;
    }

    public static function getRemoteConnection()
    {
        return self::$rc;
    }

    public function setConnection($c)
    {
        $this->con = $c;
    }
}
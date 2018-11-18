<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 11:17 PM
 */

namespace Creation\AbstractFactory;

/**
 * Interface Remote
 * @package Creation\AbstractFactory
 */
interface Remote extends Local
{
    /**
     * @param $url
     * @return mixed
     */
    public function connect2WWW($url);
}
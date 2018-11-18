<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 11:25 PM
 */

namespace Creation\AbstractFactory;

interface ConnectionFactory
{
    /**
     * @return Local
     */
    public function getLocalConnection();

    /**
     * @return Remote
     */
    public function getRemoteConnection();
}
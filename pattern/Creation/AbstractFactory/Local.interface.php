<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 11:15 PM
 */

namespace Creation\AbstractFactory;

/**
 * Interface Local
 * @package Creation\AbstractFactory
 */
interface Local {
    /**
     * @param $filename
     * @return array
     */
    public function loadDb($filename);
}
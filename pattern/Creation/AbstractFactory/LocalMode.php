<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 11:18 PM
 */

namespace Creation\AbstractFactory;

/**
 * Class LocalMode
 * @package Creation\AbstractFactory
 */
class LocalMode implements Local {
    /**
     * @param $name
     * @return array
     */
    public function loadDB($name) {
        echo "Load from a local database ";
        return array();
    }
}
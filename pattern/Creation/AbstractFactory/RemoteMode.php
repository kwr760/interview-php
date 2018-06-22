<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 11:21 PM
 */

namespace Creation\AbstractFactory;

/**
 * Class RemoteMode
 * @package Creation\AbstractFactory
 */
class RemoteMode implements Remote {
    /**
     * @param $url
     * @return null
     */
    public function connect2WWW($url) {
        echo "Connect to a remote site";
        return;
    }

    /**
     * @param $name
     * @return array
     */
    public function loadDB($name) {
        echo "Load from a remote database";
        return array();
    }
}
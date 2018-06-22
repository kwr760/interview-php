<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 10:52 PM
 */

namespace Creation\Factory;

/**
 * Class DbFile
 * @package Creation\Factory
 */
class DbFile implements Display {
    /**
     * @param $file
     */
    public function load($file) {
        echo "load from db";
    }

    public function formatConsistency() {
        echo "db format changed";
    }
}
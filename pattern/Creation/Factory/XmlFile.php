<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 10:51 PM
 */

namespace Creation\Factory;

/**
 * Class Xmlfile
 * @package Creation\Factory
 */
class Xmlfile implements Display
{
    /**
     * @param $file
     */
    public function load($file)
    {
        echo "load from a xml file";
    }

    public function formatConsistency()
    {
        echo "xml file format changed";
    }
}

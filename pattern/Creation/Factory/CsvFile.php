<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 10:51 PM
 */

namespace Creation\Factory;

/**
 * Class CsvFile
 * @package Creation\Factory
 */
class CsvFile implements Display
{
    /**
     * @param $file
     */
    public function load($file)
    {
        echo "load from a csv file";
    }

    public function formatConsistency()
    {
        echo "csv file format changed";
    }
}

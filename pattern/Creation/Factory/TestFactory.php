<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 10:52 PM
 */

namespace Creation\Factory;

/**
 * Class Page
 * @package Creation\Factory
 */
class Page
{
    /**
     * @param $type
     */
    public function display($type)
    {
        /**
         * var Display
         */
        $display = null;

        switch ($type) {
            case 1:
                $display = new CsvFile();
                break;
            case 2:
                $display = new XmlFile();
                break;
            case 3:
                $display = new DbFile();
                break;
            default:
                exit(1);
        }

        $display->load("");
        $display->formatConsistency();
    }
}

$$page = new Page();
$page->display(1);

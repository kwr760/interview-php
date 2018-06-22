<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 10:47 PM
 */

namespace Creation\Factory;

/**
 * Interface Display
 * @package Creation\Factory
 */
interface Display {
    /**
     * @param $filename
     * @return void
     */
    public function load($filename);

    /**
     * @return void
     */
    public function formatConsistency();
}
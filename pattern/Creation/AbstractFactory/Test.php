<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 11:31 PM
 */

namespace Creation\AbstractFactory;

class Test
{
    public function display($args)
    {
        $dm = new DataManager();
        $di = null;
        $dbFileName = "db.db";
        if (strlen($args) == 1) {
            $dm->setConnection(true);
            $lm = $dm->getLocalConnection();
            $di = $lm->loadDB($dbFileName);
        } else {
            $rm = $dm->getRemoteConnection();
            $rm->connect2WWW("www.javacamp.org/db/");
            $di = $rm->loadDB($dbFileName);
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/29/2015
 * Time: 11:27 PM
 */

namespace Creation\AbstractFactory;


class DataManager implements ConnectionFactory {
    var $local = false;
    var $data;

    /**
     * @return Local
     */
    public function getLocalConnection() {
        return new LocalMode();
    }

    /**
     * @return Remote
     */
    public function getRemoteConnection() {
        return new RemoteMode();
    }

    public function loadData() {
         if($this->local){
             $conn = $this->getLocalConnection();
             $this->data = $conn->loadDB("db.db");
         } else {
             $conn = $this->getRemoteConnection();
             $conn->connect2WWW("www.some.where.com");
             $this->data = $conn->loadDB("db.db");
         }
    }

    /**
     * @param bool $b
     */
    public function setConnection($b) {
        $this->local = $b;
    }
}

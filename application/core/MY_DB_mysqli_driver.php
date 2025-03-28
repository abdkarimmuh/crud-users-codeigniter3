<?php
class MY_DB_mysqli_driver extends CI_DB_mysqli_driver {
    public function __construct($params) {
        parent::__construct($params);
        if (!isset($this->failover)) {
            $this->failover = array();
        }
    }
}
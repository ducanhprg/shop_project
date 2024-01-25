<?php
require_once '../../common.php';

class Models
{
    protected $db;

    public function __construct()
    {
        global $conn;
        echo  11111;
        print_r($this->db);
        exit();
        $this->db = $conn;
    }
}
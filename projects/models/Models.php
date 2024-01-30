<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/common.php";

class Models
{
    protected $db;

    public function __construct()
    {
        global $conn;
        $this->db = $conn;
    }
}
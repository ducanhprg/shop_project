<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/shop_project/common.php";

class Models
{
    protected $db;

    public function __construct()
    {
        global $conn;
        $this->db = $conn;
    }
}
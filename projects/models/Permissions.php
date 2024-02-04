<?php

namespace models;

class Permissions extends \Models
{
    private string $table = 'permissions';

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAllPermissions() : array
    {
        $sqlString = "SELECT * FROM $this->table";
        $result = $this->db->query($sqlString);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
<?php

namespace models;

class Roles extends \Models
{
    private string $table = 'roles';

    public function __construct()
    {
        parent::__construct();
    }
    
    public function createRole(array $roleData): void
    {
        $fields = implode(", ", array_keys($roleData));
        $values = implode("', '", array_values($roleData));
        $sqlString = "INSERT INTO $this->table ($fields)
                VALUES ('$values')";
        $this->db->query($sqlString);
    }

    public function updateRole(string $name, array $newRoleData): void
    {
        $updateString = '';
        foreach ($newRoleData as $key => $value) {
            $updateString  .= "$key = '$value' ";
        }
        $sqlString = "UPDATE $this->table SET $updateString WHERE name = '$name'";
        $this->db->query($sqlString);
    }

    public function deleteRole(string $name): void
    {
        $sqlString = "UPDATE $this->table SET status = '2' WHERE name = '$name'";
        $this->db->query($sqlString);
    }

    public function getAllRoles() : array
    {
        $sqlString = "SELECT * FROM $this->table WHERE status = '1'";
        $result = $this->db->query($sqlString);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
<?php

class Users extends Models
{
    private string $table = 'users';
    public function __construct()
    {
        parent::__construct();
    }

    public function getFirstUser(): array
    {
        $sqlString = "SELECT * FROM $this->table ORDER BY id DESC LIMIT 1";
        $result = $this->db->query($sqlString);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createUser(array $userData): void
    {
        $fields = implode(", ", array_keys($userData));
        $values = implode("', '", array_values($userData));
        $sqlString = "INSERT INTO $this->table ($fields)
                VALUES ('$values')";
        $this->db->query($sqlString);
    }
    public function updateUser(string $username, array $newUserData): void
    {
        $updateString = '';
        foreach ($newUserData as $key => $value) {
            $updateString  .= "$key = '$value' ";
        }
        $sqlString = "UPDATE $this->table SET $updateString WHERE username = '$username'";
        $this->db->query($sqlString);
    }

    public function deleteUser(string $username): void
    {
        $sqlString = "DELETE FROM $this->table WHERE username = '$username'";
        $this->db->query($sqlString);
    }
    
    public function findUserByUsernameAndPassword(string $username, string $password): null|array
    {
        $sqlString = "SELECT * FROM $this->table WHERE username = '$username' AND password = '$password'";
        $result = $this->db->query($sqlString);
        return $result->fetch_assoc();
    }

    public function findUserByUsername(string $username) : array 
    {
        $sqlString = "SELECT * FROM $this->table WHERE username = '$username'";
        $result = $this->db->query($sqlString);
        return $result->fetch_assoc();
    }

    public function checkExistedUser(string $username): bool
    {
        $sqlString = "SELECT * FROM $this->table WHERE username = '$username'";
        $result = $this->db->query($sqlString)->fetch_assoc();
        if (empty($result)) {
            return false;
        }
        return true;
    }

    public function getAllUsers() : array
    {
        $sqlString = "SELECT * FROM $this->table";
        $result = $this->db->query($sqlString);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
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

    public function getAllUsers(): array
    {
        $sqlString = "SELECT * FROM $this->table";
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

    public function findUserByUsernameAndPassword(string $username, string $password): null|array
    {
        $sqlString = "SELECT * FROM $this->table WHERE username = '$username' AND password = '$password'";
        $result = $this->db->query($sqlString);
        return $result->fetch_assoc();
    }

    // Update User by ID
    public function updateUser(array $userData): void
    {
        $sqlString = "UPDATE $this->table SET username = '$userData[username]', email = '$userData[email]' WHERE id = $userData[id]";
        $this->db->query($sqlString);
    }

    public function deleteUser($id): void
    {
        // Delete User by ID
        $sqlString = "DELETE FROM $this->table WHERE id = $id";
        $result = $this->db->query($sqlString);
    }

}
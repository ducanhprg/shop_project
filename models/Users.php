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

    public function updateUser(int $userId, array $userData): void
    {
        $updateString = "email = '{$userData['email']}',
                         first_name = '{$userData['first_name']}', 
                         last_name = '{$userData['last_name']},
                         phone = '{$userData['phone']}";
        $sqlString = "UPDATE $this->table SET $updateString WHERE id = $userId";
        $this->db->query($sqlString);
    }

    public function findUserByUsernameAndPassword(string $username, string $password): null|array
    {
        $sqlString = "SELECT * FROM $this->table WHERE username = '$username' AND password = '$password'";
        $result = $this->db->query($sqlString);
        return $result->fetch_assoc();
    }

    public function deleteUser(int $userId): void 
    {
        $sqlString = "DELETE FROM $this->table WHERE id = $userId";
        $this->db->query($sqlString);
    }

    public function findUserByUserNameAndEmail(string $username, string $email): null|array
    {
        $sqlString = "SELECT * FROM $this->table WHERE username = '$username' or email = '$email'";
        $result = $this->db->query($sqlString);
        return $result->fetch_assoc();
    }
}
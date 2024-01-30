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

    public function findUserByUsernameAndPassword(string $username, string $password): null|array
    {
        $sqlString = "SELECT * FROM $this->table WHERE username = '$username' AND password = '$password'";
        $result = $this->db->query($sqlString);
        return $result->fetch_assoc();
    }
}
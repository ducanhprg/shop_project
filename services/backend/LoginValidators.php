<?php

class LoginValidators
{
    private string $username;
    private string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function validate(): bool
    {
        // check cac case validation
        // Check empty username & password
        if (empty($this->username) || empty($this->password)) {
            return false;
        }

        // Check length username & password
        if (strlen($this->username) < 3|| strlen($this->password) < 5) {
            return false;
        }

        // Check password contain letter and number
        if (!preg_match("/[a-zA-Z]/", $this->password) || !preg_match("/[0-9]/", $this->password)) {
            return false;
        }
        return true;
    }
}
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
        if (empty($this->username) || empty($this->password)) {
            return false;
        }
        if (strlen($this->username) < 6 || strlen($this->username) > 20 || strlen($this->password) < 8) {
            return false;
        }
        if (!preg_match("/[^A-Za-z0-9 -]+/", $this->password)) {
            return false;
        }
        return true;
    }

}
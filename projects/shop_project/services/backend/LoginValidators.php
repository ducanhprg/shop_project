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
        if (!$this->validateUsername() || !$this->validatePassword()) {
            return false;
        }

        return true;
    }

    public function validateUsername(): bool
    {
        // Check length & empty
        if (empty($this->username) || !((strlen($this->username) > 8) && (strlen($this->username) < 15))) {
            return false;
        }
        return true;
    }

    public function validatePassword(): bool
    {
        // Check length & empty
        if (empty($this->password) || (strlen($this->password) < 8)) {
            return false;
        }
        // Check password's strength
        if (!preg_match("/[^A-Za-z0-9 -]+/", $this->password)) {
            return false;
        }
        return true;
    }
}
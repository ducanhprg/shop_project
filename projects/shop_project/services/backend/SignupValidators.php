<?php

class SignupValidators
{
    private string $username;
    private string $password;
    private string $email;

    public function __construct(string $username, string $password, string $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
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

    public function validateEmail(): bool
    {
        if (empty($this->email)) {
            return false;
        }
        if (!strpos('@', $this->email)) {
            return false;
        }
        return true;
    }
}
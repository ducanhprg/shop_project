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
        if (!empty($this->username) || !empty($this->password)) {
            return false;
        }

        return true;
    }

}
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
    private function specialChar($username): bool|int
    {
        return preg_match('/[^a-zA-Z0-9]/', $username);
    }

    public function validate(): bool
    {
        // check cac case validation
        // Checks if username or password empty
        if (empty($this->username) || empty($this->password)) {
            return false;
        }

        // Check if username too long
        if (strlen($this->username) > 50) {
            return false;
        }

        // Check special characters
        if ($this->specialChar($this->username)){
            return false;
        }

        // Additional checks

        return true;
    }
}
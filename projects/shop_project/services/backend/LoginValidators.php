<?php

class LoginValidators
{
    private string $username;
    private string $password;
    private array $errors = [];

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function Validate(): bool
    {
        // check cac case validation
        if (empty($this->username)) {
            $this->errors['username'] = 'Username is required';
        } elseif (strlen($this->username) < 5) {
            $this->errors['username'] = 'Username must be at least 5 characters';
        }

        if (empty($this->password)) {
            $this->errors['password'] = 'Password is required';
        } elseif (strlen($this->password) < 5) {
            $this->errors['password'] = 'Password must be at least 5 characters';
        } elseif (!preg_match('/^([A-Z])([\w_\.!@#$%^&*()]+){4,31}$/', $this->password)) {
            $this->errors['password'] = 'The password must contain at least one letter, 
                                         Capitalize the first letter.';
        }

        return empty($this->errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
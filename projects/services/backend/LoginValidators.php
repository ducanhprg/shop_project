<?php

namespace services\backend;

class LoginValidators
{
    private string $username;
    private string $password;

    public array $errors = [];

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function validate(): bool
    {
        $this->validateUsername();
        $this->validatePassword();
        return empty($this->errors);
    }

    private function validateUsername(): void
    {
        if (!$this->checkFormat()) {
            $this->errors[] = 'Incorrect username format';
        }

        if (!$this->checkLength(5, 12)) {
            $this->errors[] = 'Username must contains 5 to 12 characters';
        }

        if (!$this->checkSpecialCharacters()) {
            $this->errors[] = 'Username must not contain special characters';
        }
    }

    private function validatePassword(): void
    {
        if (!$this->checkFormat()) {
            $this->errors[] = 'Incorrect password format';
        }

        if (!$this->checkLength(6, 12)) {
            $this->errors[] = 'Password must contains 6 to 12 characters';
        }

        if (!$this->checkSpecialCharacters()) {
            $this->errors[] = 'Password must not contain special characters';
        }
    }

    private function checkFormat(): bool
    {
        return false;
    }

    private function checkLength(int $min, int $max): bool
    {
        return false;
    }

    private function checkSpecialCharacters(): bool
    {
        return false;
    }

}
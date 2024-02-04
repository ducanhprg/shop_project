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
        if (!$this->checkFormat($this->username)) {
            $this->errors[] = 'Incorrect username format';
        }

        if (!$this->checkLength($this->username, 5, 12)) {
            $this->errors[] = 'Username must contains 5 to 12 characters';
        }

        if (!$this->checkSpecialCharacters($this->username)) {
            $this->errors[] = 'Username must not contain special characters';
        }
    }

    private function validatePassword(): void
    {
        if (!$this->checkFormat($this->password)) {
            $this->errors[] = 'Incorrect password format';
        }

        if (!$this->checkLength($this->password, 6, 12)) {
            $this->errors[] = 'Password must contains 6 to 12 characters';
        }

        if (!$this->checkSpecialCharacters($this->password)) {
            $this->errors[] = 'Password must not contain special characters';
        }
    }

    public function checkFormat(string $text): bool
    {
        return true;
    }

    public function checkLength(string $text, int $min, int $max): bool
    {
//        if (strlen($text) < $min || strlen($text) > $max) {
//            return false;
//        }
        return true;
    }

    public function checkSpecialCharacters(string $text): bool
    {
//        if (!preg_match("/[^\w]/", $text)) {
//            return false;
//        }
        return true;
    }
}
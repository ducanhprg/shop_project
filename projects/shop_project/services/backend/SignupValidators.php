<?php

class SignupValidators
{
    private array $userData;

    public function __construct(array $userData)
    {
        $this->userData = $userData;
    }

    public function validateUsername(): bool
    {
        // Check length & empty
        if (empty($this->userData['username']) || !((strlen($this->userData['username']) > 8) && (strlen($this->userData['username']) < 20))) {
            return false;
        }
        return true;
    }

    public function validatePassword(): bool
    {
        // Check length & empty
        if (empty($this->userData['password']) || (strlen($this->userData['password']) < 8)) {
            return false;
        }
        // Check password's strength
        if (!preg_match("/[^A-Za-z0-9 -]+/", $this->userData['password'])) {
            return false;
        }
        return true;
    }

    public function validateEmail(): bool
    {
        if (empty($this->userData['email'])) {
            return false;
        }
        if (!strpos('@', $this->userData['email'])) {
            return false;
        }
        return true;
    }

    public function validateName(): bool
    {
        if (empty($this->userData['first_name']) || empty($this->userData['last_name'])) {
            return false;
        }
        if (preg_match("/[0-9]/", $this->userData['first_name']) || 
        preg_match("/[0-9]/", $this->userData['last_name']) || 
        preg_match("/[^\w]/", $this->userData['first_name']) || 
        preg_match("/[^\w]/", $this->userData['last_name'])) {
            return false;
        }
        return true;
    }

    public function validatePhone(): bool
    {
        if (!(strlen($this->userData['phone']) == 12 || strlen($this->userData['phone']) == 0)) {
            return false;
        }
        return true;
    }

}
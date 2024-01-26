<?php


class CreateValidators
{
    private array $userData;

    public function __construct(array $userData)
    {
        $this->userData = $userData;
    }

    public function validate(): bool
    {
        // check cac case validation
        // Check length username & password
        if (strlen($this->userData['username']) < 3|| strlen($this->userData['password']) < 5 || strlen($this->userData['first_name']) < 2) {
            return false;
        }

        // Check password contain letter and number
        if (!preg_match("/[a-zA-Z]/", $this->userData['password']) || !preg_match("/[0-9]/", $this->userData['password'])) {
            return false;
        }
        return true;
    }
}
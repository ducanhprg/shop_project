<?php

$a = new stdClass();

//print_r($a);

class User
{
    private $name;
    private $age;

    public function getName()
    {
        $this->name = 'abc';
        return $this->name;
    }

    public function getAge()
    {
        $this->age = 12;
        return $this->age;
    }
}

$b = new User();
print_r($b);

echo '</br>';
echo $b->getName();
echo '</br>';
echo $b->getAge();

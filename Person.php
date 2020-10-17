<?php

// var_dump($argv);


class Person
{
    public $name;
    protected $age;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age){
        if($age < 18){
            exit("Youre not allowed");
        }
        $this->age=$age;
    }

    public function __toString()
    {
        return $this->name;
    }
}
$jhon = new Person($argv[1]);
$jhon->setAge($argv[2]);
echo "Your name ".$jhon." and your age ".$jhon->getAge();

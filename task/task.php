<?php

class Task
{
    protected $description;
    protected $complete=false;

    public function __construct($description)
    {
        return $this->description=$description;
    }

    public function isComplete()
    {
        return $this->complete;
    }
    public function complete()
    {
        return $this->complete=true;
    }
    public function description()
    {
        return $this->description;
    }
}

$tasks = [
    new Task("Go To store"),
    new Task("Go to then Store"),
    new Task("Go to then")
];

$tasks[1]->complete();
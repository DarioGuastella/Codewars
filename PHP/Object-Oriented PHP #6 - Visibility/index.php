<?php
class Person
{
    protected $name;
    protected $age;
    protected $occupation;

    public function __construct($name, $age, $occupation)
    {
        $this->set_name($name);
        $this->set_age($age);
        $this->set_occupation($occupation);
    }

    //getter

    public function get_name()
    {
        return $this->name;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function get_occupation()
    {
        return $this->occupation;
    }

    //setter

    public function set_name($name)
    {
        if (!is_string($name)) {
            throw new InvalidArgumentException("Name must be a string!");
        }
        $this->name = $name;
    }

    public function set_age($age)
    {
        if (!is_int($age) || $age < 0) {
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        $this->age = $age;
    }

    public function set_occupation($occupation)
    {
        if (!is_string($occupation)) {
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        $this->occupation = $occupation;
    }
}

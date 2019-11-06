<?php

class Direction 
{
    public $university, $directionName;

    public function info()
    {
        return ', direction \'' . $this->directionName . '\', in ' . $this->university;
    }
}

class Course extends Direction
{
    public $courseName, $student;

    public function info() {
        return $this->student . ' chose the course ' . $this->courseName . parent::info();
    }
}

class Group extends Course
{
    public $groupName;

    public function info() {
        return parent::info() . '. ' . $this->student . ' got into a group ' . $this->groupName . PHP_EOL;
    }
}

$result = new Group();

$result->university = 'O.M.Beketov NUUE';
$result->directionName = 'Computer Science';
$result->courseName = 'Computer Systems Architecture';
$result->student = 'Igor Baranchuk';
$result->groupName = 'KN 2016-1';

echo $result->info();

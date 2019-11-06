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
    private $courseName, $student;

    public function setCourseName($name) {
        $this->courseName = $name;
    } 

    public function getCourseName() {
        return $this->courseName;
    }

    public function setStudent($name) {
        $this->student = $name;
    } 

    public function getStudent() {
        return $this->student;
    }

    public function info() {
        return $this->getStudent() . ' chose the course ' . $this->getCourseName() . parent::info();
    }
}

class Group extends Course
{
    private $groupName;

    public function setGroupName($name) {
        $this->groupName = $name;
    } 

    public function getGroupName() {
        return $this->groupName;
    }

    public function info() {
        return parent::info() . '. ' . parent::getStudent() . ' got into a group ' . $this->getGroupName() . PHP_EOL;
    }
}

$result = new Group();

$result->university = 'O.M.Beketov NUUE';
$result->directionName = 'Computer Science';
$result->setCourseName('Computer Systems Architecture');
$result->setStudent('Igor Baranchuk');
$result->setGroupName('KN 2016-1');

echo $result->info();
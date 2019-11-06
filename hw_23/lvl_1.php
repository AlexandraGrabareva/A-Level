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
    	return $this->student . ' chose the course ' . $this->courseName . parent::info() . PHP_EOL;
    }
}

$result = new Course();

$result->university = 'O.M.Beketov NUUE';
$result->directionName = 'Computer Science';
$result->courseName = 'Computer Systems Architecture';
$result->student = 'Igor Baranchuk';

echo $result->info();

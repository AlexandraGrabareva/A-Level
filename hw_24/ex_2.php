<?php
 
abstract class Ship
{
	public $name;
	public $boatName;
	public $assignment;
	public $engine;
	public $country;

	public function __construct($name, $boatName, $assignment, $engine, $country)
 	{
 		$this->name = $name;
 		$this->boatName = $boatName;
 		$this->assignment = $assignment;
 		$this->engine = $engine;
 		$this->country = $country;
 	}
}

class Sailboat extends Ship
{
	public $type;

	public function __construct($name, $boatName, $assignment, $type, $engine, $country)
 	{
 		parent::__construct($name, $boatName, $assignment, $engine, $country);
 		$this->type = $type;
 	}

	public function info()
 	{
 		return $this->name . ' \'' . $this->boatName . '\':' . "\nAssignment: " . $this->assignment . "\nType: " . $this->type . "\nEngine: " . $this->engine . "\nCountry: " . $this->country . PHP_EOL;
 	}
}

class Liner extends Ship
{
	public $passengerCapacity;

	public function __construct($name, $boatName, $assignment, $passengerCapacity, $engine, $country)
 	{
 		parent::__construct($name, $boatName, $assignment, $engine, $country);
 		$this->passengerCapacity = $passengerCapacity;
 	}

	public function info()
 	{
 		return $this->name . ' \'' . $this->boatName . '\':' . "\nAssignment: " . $this->assignment . "\nPassenger capacity: " . $this->passengerCapacity . "\nEngine: " . $this->engine . "\nCountry: " . $this->country . PHP_EOL;
 	}
}

class AircraftCarrier extends Ship
{
	public $aircraftCarried;

	public function __construct($name, $boatName, $assignment, $aircraftCarried, $engine, $country)
 	{
 		parent::__construct($name, $boatName, $assignment, $engine, $country);
 		$this->aircraftCarried = $aircraftCarried;
 	}

	public function info()
 	{
 		return $this->name . ' \'' . $this->boatName . '\':' . "\nAssignment: " . $this->assignment . "\nAircraft carried: " . $this->aircraftCarried . "\nEngine: " . $this->engine . "\nCountry: " . $this->country . PHP_EOL;
 	}
}

class Cruiser extends Ship
{
	public $armanent;

	public function __construct($name, $boatName, $assignment, $armanent, $engine, $country)
 	{
 		parent::__construct($name, $boatName, $assignment, $engine, $country);
 		$this->armanent = $armanent;
 	}

	public function info()
 	{
 		return $this->name . ' \'' . $this->boatName . '\':' . "\nAssignment: " . $this->assignment . "\nArmanent: " . $this->armanent . "\nEngine: " . $this->engine . "\nCountry: " . $this->country . PHP_EOL;
 	}

}

$Libertad = new Sailboat('Sailboat','Libertad', 'training ship', 'full-rigged (3 masts)' ,'sails + diesel engine', 'Argentina');
$QueenMary2 = new Liner('Liner','Queen Mary 2', 'passenger ship', '2695' ,'electric motors + screws + diesel generator + turbine', 'Great Britain');
$CharlesDeGaulle = new AircraftCarrier('Aircraft carrier','Charles de Gaulle', 'flagship', 'up to 40 aircrafts' ,'water atomic reactors', 'France');
$Virginia = new Cruiser('Cruiser','Virginia', 'nuclear guided-missile cruiser', 'missile launchers + rapid-fire gun + helicopter' ,'atomic reactors', 'USA');


echo $Libertad->info() . PHP_EOL;
echo $QueenMary2->info() . PHP_EOL;
echo $CharlesDeGaulle->info() . PHP_EOL;
echo $Virginia->info() . PHP_EOL;
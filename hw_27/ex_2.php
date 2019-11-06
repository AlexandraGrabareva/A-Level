<?php

interface Executable
{
	public function execute($eventData);
}

class FireDepartment implements Executable
{
	public function execute($eventData) {
		echo 'Fire engine goes to ' . $eventData['address'] . PHP_EOL;
	}
}

class EventManager
{
	protected $subscribers;
	
	public function subscribe(Executable $handler, $type) {
		if (empty($this->subscribers[$type])) {
			$this->subscribers[$type] = [];
		}
		$this->subscribers[$type][] = $handler;
	}

	public function dispatchEvent($eventData, $type) {
		if(!empty($this->subscribers[$type])) {
			
			// array_shift() — извлекает первый элемент массива
			array_shift($this->subscribers[$type])->execute($eventData);
		}
		else echo 'No free fire engines' . PHP_EOL;
	}
}

$manager = new EventManager();

$fireDepartment1 = new FireDepartment();
$manager->subscribe($fireDepartment1, 'fire');

$fireDepartment2 = new FireDepartment();
$manager->subscribe($fireDepartment2, 'fire');

$fireDepartment3 = new FireDepartment();
$manager->subscribe($fireDepartment3, 'fire');

$manager->dispatchEvent([
	'address' => 'SomeAddress1'
], 'fire');

$manager->dispatchEvent([
	'address' => 'SomeAddress2'
], 'fire');

$manager->dispatchEvent([
	'address' => 'SomeAddress3'
], 'fire');

$manager->dispatchEvent([
	'address' => 'SomeAddress4'
], 'fire');
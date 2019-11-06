<?php

class MyListNode 
{
	public $data;
	public $next;
}

class MyList implements Iterator
{
	protected $start;
	protected $currentNode;

	public function append($data) {
		if (!$this->start) {
			$this->start = new MyListNode();
			$this->start->data = $data;
			return;
		}
		$newNode = new MyListNode();
		$newNode->data = $data;
		$lastNode = $this->getLastNode();
		$lastNode->next = $newNode;
	}

	public function getLastNode() {
		$result = $this->start;
		while($result->next) {
			$result = $result->next;
		}
		return $result;
	}
	
	// current() — указывает на текущий элемент в структуре
	public function current() {
		return $this->currentNode->data; 
	}

	// key() — ключ для текущего элемента
	public function key() {
		return $this->currentNode;
	}

	// next() — ф-ия, которыя должна переместить указатель на следующий элемент
	public function next() {
		$this->currentNode = $this->currentNode->next;
	}

	// rewind() — ф-ия, которыя должна сбросить указатель в исходное положение
	public function rewind() {
		$this->currentNode = $this->start;
	}

	// valid() — проверит, можно ли выводить данные, на которые указывает указатель
	public function valid() {
		return !empty($this->currentNode);
	}
}

$myList = new MyList();

$myList->append(1);
$myList->append(2);
$myList->append(3);

foreach ($myList as $item) {
	var_dump($item);
}
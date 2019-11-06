<?php

class MagicArray
{
	protected $_data = [];

	/* _call — вызывается когда у объекта запрошен метод, 
	   который не объявлен в классе */
	public function __call($method, $args) { 

		/* strpos() — возвращает позицию первого вхождения подстроки */
		if(strpos($method, 'get') === 0) { 

			/* substr() — возвращает подстроку строки $method
			   (выводит все, что было в названии метода после 'get') */ 
			$key = substr($method, strlen('get')); 

			/* Нулевой оператор объединения (??) — 
			   возвращает свой первый операнд,
			   если он существует и не равен NULL; 
			   в противном случае он возвращает свой второй операнд */
			return $this->_data[$key] ?? null; 
		} else if(strpos($method, 'set') === 0) {
			$key = substr($method, strlen('set'));
			$this->_data[$key] = $args[0];
		} else if(strpos($method, 'has') === 0) {
			$key = substr($method, strlen('has'));

			/* isset() — определяет, была ли 
			   установлена переменная значением, 
			   отличным от NULL */
			return isset($this->_data[$key]); 
		}
	}

	public function getData() {
		return $this->_data;
	}
}

$ma = new MagicArray();

$ma->setColor('green');
$ma->setWeight(10);
var_dump($ma->getColor());
var_dump($ma->getTaste());

var_dump($ma->hasColor());
var_dump($ma->hasTaste());

print_r($ma->getData());
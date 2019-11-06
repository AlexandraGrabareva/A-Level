<?php

class StaticTest
{
	
	public $data;
	protected static $instance;

	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}

$st1 = StaticTest::getInstance();
$st1->data = 4;

$st2 = StaticTest::getInstance();
var_dump($st2->data);

$st3 = StaticTest::getInstance();
$st3->data = 8;
var_dump($st1->data);

$st4 = StaticTest::getInstance();
$st4->data = 16;
var_dump($st1->data);
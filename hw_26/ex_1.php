<?php

class Page
{
	public $text;
	public $padding;

	public function __construct($padding) {
		$this->padding = $padding;
	}
}
	
class PageFactory
{
	public function create() {
	
	static $counter = 0;
	
	if (!(++$counter % 2)) {
		return new Page('left');
	} 
	return new Page('right');
	}
}

$pageFactory = new PageFactory();

$page1 = $pageFactory->create();
var_dump($page1->padding);

$page2 = $pageFactory->create();
var_dump($page2->padding);

$page3 = $pageFactory->create();
var_dump($page3->padding);
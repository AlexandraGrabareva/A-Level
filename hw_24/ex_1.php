<?php
 
interface Figure {
  
  public function calcArea();

}

class Circle implements Figure {

  private $radius;
   
  public function __construct($radius)
  {
    $this->radius = $radius;
  }
  
  public function calcArea()
  {
    return 'Area of circle with radius ' . $this->radius . ': ' .pow($this->radius, 2) * pi() . PHP_EOL;
  }
}

class Rectangle implements Figure {
  private $width;
  private $height;
   
  public function __construct($width, $height)
  {
    $this->width = $width;
    $this->height = $height;
  }
    
  public function calcArea()
  {
    return 'Area of rectangle with width ' . $this->width . ' and height ' . $this->height . ': ' . $this->width * $this->height . PHP_EOL;
  }
}

class Square implements Figure {

  private $side;
   
  public function __construct($side)
  {
    $this->side = $side;
  }
    
  public function calcArea()
  {
    return 'Area of square with side ' . $this->side . ': ' . pow($this->side, 2) . PHP_EOL;
  }
}

$circle = new Circle(3);
$rectangle = new Rectangle(3,4);
$square = new Square(4);

echo $circle->calcArea();
echo $rectangle->calcArea();
echo $square->calcArea();
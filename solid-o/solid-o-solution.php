<?php

interface Shape {
    public function area();
}

class Rectangle implements Shape {
  
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area() {
        return $this->width * $this->height;
    }
}

class Square implements Shape {
  
    private $length;
    
    public function __construct($length) {
        $this->length = $length;
    }
    
    public function area() {
        return pow( $this->length, 2 );
    }
}

class Circle implements Shape {
  
    public $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return pi() * pow( $this->radius, 2 ) ;
    }
}


class AreaCalculator {
  
    protected $shapes;
    
    public function __construct( $shapes = array() ) {
        $this->shapes = $shapes;
    }
    
    public function sum() {
        $area = [];
        
        foreach($this->shapes as $shape) {
            $area[] = $shape->area();
        }
    
        return array_sum($area);
    }
}


$rectangle  = new Rectangle(5, 6);
$square     = new Square(5);
$circle     = new Circle(4);
$area_calculator = new AreaCalculator([$rectangle, $square, $circle]);
echo 'summation of area is: ' . $area_calculator->sum();

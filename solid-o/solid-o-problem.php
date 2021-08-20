<?php

//initial shapes
class Rectangle {
  
    public $width;
    public $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

class Square {
  
    public $length;
    
    public function __construct($length) {
        $this->length = $length;
    }
}

class Circle {
  
    public $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
}

/**
 * Calculates total area of some given shape
 */
class AreaCalculator {
  
    protected $shapes;
    
    public function __construct( $shapes = array() ) {
        $this->shapes = $shapes;
    }
    
    public function sum() {
        $area = [];
        
        foreach($this->shapes as $shape) {

            if($shape instanceof Square) {
                $area[] = pow( $shape->length, 2 );
            } elseif( $shape instanceof Rectangle ) {
                $area[] = $shape->width * $shape->height;
            } elseif($shape instanceof Circle ){
                $area[] = pi() * pow( $shape->radius, 2 ) ;
            }
        }
    
        return array_sum($area);
    }
}

$rectangle  = new Rectangle(5, 6);
$square     = new Square(5);
$circle     = new Circle(4);
$circle     = new Circle(4);
$circle     = new Circle(4);
$circle     = new Circle(4);
$circle     = new Circle(4);
$area_calculator = new AreaCalculator([$rectangle, $square, $circle]);
echo 'summation of area is: ' . $area_calculator->sum();
















// now a new shape comes....now what?




// $circle = new Circle(4);







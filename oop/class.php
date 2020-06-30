<?php

class Rectangle{
    public $width;
    public $height;
    
    public function __construct() {
        echo "Da tao doi tuong";
        $this->width = 125;
        $this->height = 5;
    }
    
    public function getPerimeter(){
        return 2*($this->width+$this->height);
    }
    
    public function getArea(){
        return $this->width * $this->height;
    }
}

$a = new Rectangle();

echo $a -> getPerimeter();
echo $a -> width;
/*
echo $a->getArea();
$b = new Rectangle();

echo $b->getArea();
$a->height=5;
$a->width=4;
 * 
 */

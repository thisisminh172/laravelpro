<?php

class Rectangle{
    public $width = 20;
    public $height = 10;
    
    public function getPerimeter(){
        return 2*($this->width+$this->height);
    }
    
    public function getArea(){
        return $this->width * $this->height;
    }
}

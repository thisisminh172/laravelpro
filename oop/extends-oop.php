<?php

class A{
    protected $attr_1 =10;
    // ...
    function method_1(){
        echo "ok";
    }
}

class B extends A{
    public $attr_2;
    
    public function method_2(){
        return $this->attr_1;
    }
}
$b = new B();
$b->attr_2 = "Class B";
echo $b->method_2();
//echo $b ->method_1();


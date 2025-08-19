<?php

abstract class A{
    abstract function meow();

    public function bhow(){
        echo "bhow bhoww<br>";
    }
}

class B extends A{
    public function meow(){
        echo "meow meoww<br>";
    }
}

$r1 = new B();
$r1->meow();
$r1->bhow();
    
?>
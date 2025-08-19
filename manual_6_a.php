<?php

class Base{
    protected $name;
    protected $id;

    public function __construct($name,$id){
        $this->name = $name;
        $this->id = $id;
    }

    public function getname(){
        return $this->name;
    }

    public function getid(){
        return $this->id;
    }
}

class Derived extends Base{
    protected $enrollment;

    public function __construct($name,$id,$enrollment){
        parent::__construct($name,$id);
        $this->enrollment = $enrollment;
    }

    public function getEnroll(){
        return $this->enrollment;
    }
}

class Derived2 extends Derived{
    protected $car;

    public function __construct($name,$id,$enrollment,$car){
        parent::__construct($name,$id,$enrollment,$car);
        $this->car = $car;
    }

    public function getCar(){
        return $this->car;
    }
}

$r1 = new Derived2("romit",1,153,"mustang");
echo $r1->getname()."<br>";
echo $r1->getid()."<br>";
echo $r1->getEnroll()."<br>";
echo $r1->getcar()."<br>";

?>
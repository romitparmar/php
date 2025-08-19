<?php

class Base{
    private $name;
    private $id;

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

    public function __destruct(){
        echo "destructor iss called";
    }
}

$r1 = new Base("romit",153);

$r2 = clone $r1;
echo $r2->getname()."<br>";
echo $r1->getid();

?>
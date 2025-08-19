<?php

echo "hey there!!!<br>";

class Base{
    private $name;
    private $id;

    public function setdata($name,$id){
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

$r1 = new Base();
$r1->setdata("romit",153);

$r2 = clone $r1;
$r2->setdata("raju",11);

echo $r2->getname()."<br>";
echo $r1->getname()."<br>";
echo $r1->getid();

?>
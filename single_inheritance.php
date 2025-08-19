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
}


class Derived extends Base{
   private $email;

   public function __construct($name,$id,$email){
        parent::__construct($name,$id);
        $this->email = $email;
   }

   public function getmail(){
    return $this->emain;
   }

}

class Derived2 extends Base{
    private $pass;

    public function __construct($name,$id,$email,$pass){
        parent::__construct($name,$id,$email);
        $this->pass = $pass;
    }
}

$r1 = new Derived2("romit",153,"rp17",111);
echo $r1->getname();

?>
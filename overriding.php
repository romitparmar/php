<?php

class Phone{
    public function turnOn(){
        echo "turring on the mobile<br>";
    }

    public function turnof(){
        echo "turring off the mobile<br>";
    }
}

class SmartPhone extends Phone{
        public function ui(){
            echo "designing the user inerface!!!<br>";
        }

        public function turnOn(){
            echo "turning the smartPhone!!<br>";
        }
}

$r1 = new SmartPhone();
$r1->turnOn();


?>
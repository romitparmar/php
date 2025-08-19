<?php

interface Android{
    public function os();
    public function ui();
}

interface Apple{
    public function Ios();
    public function Aui();
}

class Base implements Android,Apple{
    public function os(){
        echo "android 14<br>";
    }

    public function ui(){
        echo "coloros<br>";
    }

    public function Ios(){
        echo "ios 13";
    }

    public function Aui(){
        echo "apple ui";
    }
}

$r1 = new Base();
$r1->os()."<br>";
$r1->ui()."<br>";
$r1->Ios()."<br>";
$r1->Aui()."<br>";





?>
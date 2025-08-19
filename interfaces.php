<?php

interface Programmer{
        public function fav_lang();
    public function name();
}

interface Sport{
    public function fav_sport();
}

class Base implements Programmer,Sport{
    public function fav_lang(){
            echo "fav language is php<br>";
    }

    public function name(){
        echo "the name of programmer is {rp}<br>";
    }

    public function fav_sport(){
        echo "fav ssport is {cricket}<br>";
    }
}

$r1 = new Base();
$r1->fav_lang();
$r1->fav_sport();
$r1->name();


?>
<?php
class a{
    function __call($name,$args){
    $count = count($args);
    if ($name == 'add') {
        if ($count == 2) {
            return array_sum($args);
        } elseif ($count == 3) {
            return array_sum($args);
        }
    }
}
}
$r1  = new a();
echo $r1->add(23,54);
?>
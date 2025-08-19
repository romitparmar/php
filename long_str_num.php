<?php

// function long_num_str($a,$b,$c){

//     if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
//         return max($a,$b,$c);
//     }

//     if(is_string($a)&& is_string($b) && is_string($c)){
//         $a_len = strlen($a);
//         $b_len = strlen($b);
//         $c_len = strlen($c);
        
//         if ($a_len>$b_len && $a_len>$c_len) {
//             return $a;
//         } elseif($b_len>$a_len && $b_len>$c_len){
//             return $b;
//         } else {
//             return $c;
//         }
//     }
// }

// // echo long_num_str(1,4,6);
// echo long_num_str("romit","kuldip","jay");

class Base{

    public function __call($name,$args){
        $count1 = count($args);
        if ($name == "add") {
            if ($count1 == 2) {
                return array_sum($args);
            }elseif($count1 == 3){
                return array_sum($args);
            }
        } 
    }
}

$r1 = new Base();
echo $r1->add(1,4,6);
?>
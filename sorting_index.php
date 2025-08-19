<?php

$arr = array(5,1,3,2);

// for ($i=0; $i <4; $i++) { 
//     for ($j=0; $j <4-$i-1; $j++) { 
//         if ($arr[$j] > $arr[$j+1]) {
//             $temp = $arr[$j];
//             $arr[$j] = $arr[$j+1];
//             $arr[$j+1] = $temp;
//         }
//     }
// }

// foreach ($arr as $value) {
//     echo $value." ";
// }

for ($i=0; $i <4; $i++) { 
    for ($j=0; $j <4-$i-1; $j++) { 
        if ($arr[$j] > $arr[$j+1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}

foreach ($arr as $value) {
    echo $value." ";
}

?>
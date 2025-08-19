<?php

$arr1 = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

$arr2 = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

$result = array();

echo "<h1>multiplication of array</h1>";

for ($i=0; $i <count($arr1); $i++) { 
    for ($j=0; $j <count($arr1[$i]); $j++) { 
        $result[$i][$j] = 0;
        for ($k=0; $k <count($arr1[$j]); $k++) { 
            $result[$i][$j] += ($arr1[$i][$k]*$arr2[$k][$j]);
        }
    }
}

for ($i=0; $i <count($result); $i++) { 
    for ($j=0; $j <count($result[$i]); $j++) { 
        echo $result[$i][$j]." ";
    }
    echo "<br>";
}

?>
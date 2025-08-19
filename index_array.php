<?php

$arr1 = array("ironman","loki","thor","dr.doom");
$count1 = 0;

for ($i=0; $i <count($arr1); $i++) { 
    echo $arr1[$i]."<br>";
    $count1+=1;
}

echo "the indexx in this array iss:- ".$count1;
// foreach($arr1 as $value){
//     echo "the name is: ".$value."<br>";
// }

?>
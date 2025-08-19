<?php

//counting length in string

$str = "spide rman";
$count = 0;

$i = 0;
while (isset($str[$i])) {
    $count+=1;
    $i+=1;
}

echo "the length of string is :- ".$count."<br>";

$word_count = 0;

$j = 0;
while (isset($str[$j])) {
    if ($str[$j]==" ") {
        $word_count+=1;
    }
    $j+=1;
}

echo "the word count is:- ".$word_count;

?>
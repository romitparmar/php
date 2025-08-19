<?php

$str = "marvel";
$str2 = "new avengers";

//it will return the character of assci value
// echo chr(65);
// echo "<br>";

// echo ord("a");
// echo "<br>";

// echo strlen($str);
// echo "<br>";

// echo trim($str,"m");
// echo "<br>";

// echo ltrim($str);
// echo "<br>";

// echo rtrim($str);
// echo "<br>";

// echo join("-",["romit","parmar"]);
// echo "<br>";

// echo substr($str2,0,4);
// echo "<br>";

// echo str_replace("new","The",$str2);
// echo "<br>";

// echo str_word_count($str2);
// echo "<br>";

// echo strcmp($str,$str2);
// echo "<br>";

// echo strcasecmp($str,$str2);
// echo "<br>";

// //it will return 1st occurence of given character from string[case-sensitive];
// echo strpos($str,"m");
// echo "<br>";

// echo stripos($str,"m");
// echo "<br>";

// echo strrev($str);
// echo "<br>";

// echo strtolower($str);
// echo "<br>";

// echo strtoupper($str);
// echo "<br>";

// echo str_shuffle($str);


//it will return the assci character 
echo chr(65);
echo "<br>";

//this will return the value of that charachter
echo ord("A");
echo "<br>";


//this will return the reverse string
echo strrev($str);
echo "<br>";

//this is use to replace perticular string from org string
//like 1->what do you want to repalce 2->with you want to replce 3->from where you want to replace
echo str_replace("new","The",$str2);
echo "<br>";

//it will convert a string into uppercase
echo strtoupper($str);
echo "<br>";

//it wil use to join chracter array into one string
echo join("-",["romit","parmar"]);
echo "<br>";

//it will return string in random order
echo str_shuffle($str2);        
echo "<br>";

//i wwill return -1 if it does find and 0 if it founded
echo strcmp($str,$str2);
echo "<br>";

//coparision is case-insesative
echo strcasecmp($str,$str2);
echo "<br>";

//remove whitespaces from both side
echo trim($str);
echo "<br>";

//remove white space from left
echo ltrim($str2);
echo "<br>";

echo rtrim($str2);
echo "<br>";


//return the first occurence of character
echo strpos("avengers","v");
echo "<br>";

//case insensative
echo stripos("avengers","V");
echo "<br>";

//return word count
echo str_word_count($str);
echo "<br>";

//it will return the length of string
echo strlen($str);
echo "<br>";

echo substr($str2,1,4);
?>
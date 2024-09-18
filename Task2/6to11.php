<?php

//To Do Que 6:

$string="EraaSoft Learn by practice";
echo strlen($string)."<br>";

//To Do Que 7:

$new_string=str_replace(' ', '', $string);
echo strlen($new_string)."<br>";

//To Do Que 8:

echo str_word_count($string)."<br>";

//To Do Que 9:

$word = "by";
if ( strpos($string, $word) == true) 
{
    echo "The word '$word' exists in the string <br>";
} 
else
{
    echo "The word '$word' does not exist in the string <br>";
}

//To Do Que 10:

echo substr($string,0,8)."<br>";

//To Do Que 11:

$new_str= str_replace("by",'',$string);
echo $new_str;

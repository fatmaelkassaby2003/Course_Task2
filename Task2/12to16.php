<?php

//To Do Que 12:

$string_one = "Eraa";
$string_two = "Soft";

$full_string=$string_one.$string_two;

echo $full_string."<br>";

//To Do Que 13:
if ($full_string ==="EraaSoft")
{
    echo "Equal"."<br>";
}
else 
{
    echo "Not Equal"."<br>";
}

//To Do Que 14:

$string = 'ErraSoft';
$split = str_split($string, 2);
/*
To Do the string to split 
if contain the length ==> 
the length of each array element. Default is 1
*/
print_r($split); 
echo "<br>";
$result = implode('/', $split);
echo $result."<br>";

//To Do Que 15:

function odd_or_even($num)
{
  if ($num % 2 ==0) 
  {
    echo $num . " Is Even";
  }
  else
  {
    echo $num . "Is Odd";
  }
}
odd_or_even(10);
echo "<br>";

//To Do Que 16:

$sentence="I am a Student in EraaSoft";
if (strlen($sentence)%2==0) 
{
    echo strlen($sentence)." Is Even";
}
else
{
    echo strlen($sentence)." Is Odd";
}

<?php

//To Do Que 1:

function threenum($n1,$n2,$n3)
{
    $result = ($n1+$n2)*$n3;
    return $result;
}

echo threenum(10,20,2)."<br>";


//To Do Que 2:

const length=5;
const width=10;

function num($height)
{
  $size = length*width*$height;

  return $size;
}
echo num(2)."<br>";

//To Do Que 3:

function second($hours)
{
    $in_second=$hours*3600;
    return $in_second;
}

echo second(2)."<br>";

//To Do Que 4:

function Area_of_a_Trianglele($the_base,$height)
{
    $the_area=0.5*$the_base*$height;
    return $the_area;
}

echo Area_of_a_Trianglele(6,3)."<br>";

//To Do Que 5:

function age_in_days($year) 
{
    $days = $year * 365.25;
    return $days;
}

echo age_in_days(2003)."<br>";
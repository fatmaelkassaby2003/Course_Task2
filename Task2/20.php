<?php

function calculator (mixed $num1, mixed $num2,mixed $operator)
{
    if ($operator == "+") 
    {
        return $num1+$num2;
    }
    elseif($operator ==  "-")
    {
        return $num1-$num2;
    }
    elseif($operator ==  "/")
    {
        if($num2 ==0)
        {
            return "UnDefine";
        }
        else
        {
            return $num1/$num2;
        }
    }
    elseif($operator ==  "%")
    {
        return $num1%$num2;
    }
    elseif($operator ==  "**")
    {
        return $num1**$num2;
    }
    elseif($operator ==  "*")
    {
        return $num1*$num2;
    }
}

 echo calculator(10,2,'*');
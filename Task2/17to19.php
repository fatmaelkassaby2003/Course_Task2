<?php
//To Do Que 17:

function check($word)
{
    $description = "no pain , no gain ";

    if (strpos($description ,$word)== true) 
    {
        echo "Sucess Word";
    }
    else 
    {
        echo "Wrong Word";
    }

}

check("gain");
echo "<br>";

//To Do Que 18:

$intBoolean = 1;
    
if($intBoolean = 1)
{
    $opposite=0;
    echo "Original Boolean: $intBoolean <br>"."Opposite Boolean: $opposite <br>";
}
elseif($intBoolean = 0)
{
    $opposite=1;
    echo "Original Boolean: $intBoolean <br>"."Opposite Boolean: $opposite <br>";
}

//OR

    $intBoolean = 0;
    $opposite = $intBoolean ? 0 : 1;
    echo "Original Boolean: $intBoolean <br>";
    echo "Opposite Boolean: $opposite <br>";

//To Do Que 19:

// substr($word,-1) ===> اخر حرف ف الكلمه

function plural($word) 
{
   if(substr($word,-1)=="s" | substr($word,-1)=="S" )
   {
        echo "$word is plural ";
   }
   else
   {
    echo "$word is NOT plural ";
   }
}

plural("apples");
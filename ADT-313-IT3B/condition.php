<?php
echo "Conditional Statement"."<br>";

$showVariable = true;
$name = "axis";
$auth = false;

//if.......else
if($showVariable == true)
{
    //execute code
    echo $name;

}
else if ($showVariable && $name == "axis" && $auth)
{
    echo "Hello ". $name; 
}
else if ($showVariable && $name)
{
    echo "Not axis";
}
else
{
    //no show
    echo "Else Statement";
}



$ShowVariable2 = ($ShowVariable2 == true) ? $name : "Short Hand : Else";
echo $ShowVariable2;
?>
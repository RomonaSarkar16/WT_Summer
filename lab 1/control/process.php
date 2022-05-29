<?php
// $name=$_POST["name"];
// echo $name;
// $gender = $_POST["gender"];
// if($gender == "male")
// {
//     echo "your gender " .$gender  . "and your name is " .$gender;

// }
$number1 = $_POST["number1"];
$number1 = (float)$number1;
echo "Your 1st Number : ".$number1. " and ";

$number2 = $_POST["number2"];
$number2 = (float)$number2;
echo "Your 2nd Number : ".$number2;
$button = $_POST["button"];
echo "<br>";


if($button == "+")
{
    echo"Addition : " . $number1 + $number2 ;
}

if($button == "-")
{
    echo"Subtraction : " . $number1 - $number2 ;
}
if($button == "*")
{
    echo" Multiply : " . $number1 * $number2 ;
}
if($button == "/")
{
    echo"Division : " . $number1 / $number2 ;
}



?>
<?php


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$button = $_POST["button"];
// $java = $_POST["java"];
// $php = $_POST["php"];
// $csharp = $_POST["csharp"];
// $check1 =$_POST["check1"];
// $check2 = $_POST["check2"];
// $check3 = $_POST["check3"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$file = $_POST["file"];




if($fname == "")
{
    echo"Enter your First Name";
}
else
{
    echo"Your First Name is  " . $fname;
}
echo"<br>";
if($lname == "")
{
    echo"Enter your last Name";
}
else
{
    echo"Your last Name is  " . $lname;
}

echo"<br>";
if($age == "")
{
    echo"Enter your age";
}

echo "<br>";
if($button == "")
{
    echo"Select your designation";
}
if($button == "Junior")
{
    echo"You are a Junior Programmer";
}
if($button == "Senior")
{
    echo"You are a Senior Programmer";
}
if($button == "lead")
{
    echo"You are a Lead Programmer";
}
echo"<br>";
// isset returns a if has a dataset or not


echo"Your Skills : " ."<br>" ;

if(isset($_POST['check1']))
{
    echo  $_POST['check1']."<br>";
}
if(isset($_POST['check2']))
{
    echo $_POST['check2']."<br>";
}
if(isset($_POST['check3']))
{
    echo $_POST['check3']."<br>";
}

echo"<br>";

    if(empty($email) )
{
    echo"Enter your email ";
}
echo"<br>";



if((strlen($_POST["pass"])<6))
{
    echo"password Must be greater than 6 characters ";
}
else{
    echo"Password entered";
}
echo"<br>";

if(empty($file) )
{
    echo"Enter your file";
}
echo"<br>";




?>
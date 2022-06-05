<?php

$NameErr="";
if(isset($_POST["submit"])){
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $age = $_REQUEST["age"];
    
    // $desig = $_POST["designation"];
    // $skill = $_POST["skills"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["pass"];
// $NameErr="";
if(empty($fname) || empty($lname))
{
$NameErr = "PLease enter your Name <br>";
   if(is_numeric($fname) && is_numeric($lname))
   {
       echo"Please donot put numeric numbers";
   }
   else
   {
       echo"NO Numeric number will be taken";
   }
}
echo"<br>";
if(empty($email))
{
    echo"Enter Your Email";
}
else{
    echo"Email entered <br>";
}
echo"<br>";
if(strlen($password)<6)
{
    echo"Password must be greater than 6 digits ";
}
else{
    echo"Valid Password";
}
echo"<br>";

if(isset($desig))
{
    echo"Designation : " . $desig;
    echo"<br>";
}
else
{
    echo"Please select a designation";
}
echo"<br>";

echo"Your Skills : " ;

if(isset($_POST['skills1']))
{
    echo  $_POST['skills1'].",";
}
if(isset($_POST['skills2']))
{
    echo $_POST['skills2'].",";
}
if(isset($_POST['skills3']))
{
    echo $_POST['skills3'].".";
}

echo"<br>";


if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/" . $_FILES["myfile"]["name"]))
{
    echo"File uploaded <br>";
    echo $_FILES["myfile"]["name"];
}
else
{
    echo"File not uploaded";
}


$formdata = array(
    'firstname' => $_POST["fname"],
        'lastname' => $_POST["lname"],
        'email' => $_POST["email"],
    // 'mobile' => $_POST["mobile"],
    'image' => $_FILES["myfile"]["name"],
    'password' => $_POST["pass"]


);
echo"<br>";
$existingdata = file_get_contents('../Data/data1.json');//full info of the directory
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;
//Convert updated array to JSON
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

//write json data into data.json file
if(file_put_contents("../Data/data1.json", $jsondata)) {
     echo "Data successfully saved <br>";
 }
else 
     echo "no data saved";

$data = file_get_contents("../Data/data1.json");
$mydata = json_decode($data);


// echo "my value: ".$mydata[1]->lastname;
//  foreach($mydata as $myobject)
// {
// foreach($myobject as $key=>$value)
// {
//  echo "your ".$key." is ".$value."<br>";
// } 
// }



}

?>



<?php

$nameerr="";
if(isset($_POST["Submission"])){

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$age=$_REQUEST["age"];
// $des=$_REQUEST["designation"];
$email=$_REQUEST["Email"];
$password=$_REQUEST["pass"];

// $pl=$_REQUEST["P_Language"];
    $NAMEeRR="";
    if(empty($fname)||empty($lname)){
        $nameerr=" Please Enter your Fname ?";

        if(is_numeric($fname) && is_numeric($lname)){
            echo "First name and Last Name is numeric <br>";
        }
        else{
            echo "Not Numeric Number<br>";
            
        }
        
        if(empty($email)){
            echo "Email field is empty<br>";
        }
        else{
            echo "Email field is not empty<br>";
        }
        
        if(strlen($password)<6){
            echo "Password must be more than 6 characters<br>";
        }
        else{
            echo "Password is valid<br>";
        }
        
        if(isset($des)){
            echo "Designation is = ".$des;
            echo "<br>";
        }
        else{
            echo "Please select a Destination<br>";
        }
        
        
        
        if(isset($pl)){
            echo "Preferred Language is = ".$pl;
        }
        else {
            echo "Please enter at least one option.<br>";
        }
        //move
    //attribute
    //to save original name 
    //if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/" . $_FILES["myfile"]["name"] ))
    //to save with myfile name 
    // if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/myfile.pdf"))
    
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/". $_FILES["myfile"]["name"] ))
       {//"../uploads"."myfile.png"
           echo"File uploaded";
           echo $_FILES["myfile"]["name"];

       }
       
       else
       {
        echo"File not uploaded";
        
       }
    }
    $formdata = array(
        'firstname' => $_POST["fname"],
        'lastname' => $_POST["lname"],
        'email' => $_POST["Email"],
        // 'mobile' => $_POST["mobile"],
        // 'image' => $_FILES["myfile"]["name"]
    );
    $existingdata = file_get_contents('data.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] =$formdata;
    //Convert updated array to JSON
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
    
    //write json data into data.json file
    if(file_put_contents("../data/data.json", $jsondata)) {
         echo "Data successfully saved <br>";
     }
    else 
         echo "no data saved";

  $data = file_get_contents("../data/data.json");
  $mydata = json_decode($data);

 
  echo "my value: ".$mydata[1]->lastname;
/*	 foreach($mydata as $myobject)
  {
  foreach($myobject as $key=>$value)
 {
     echo "your ".$key." is ".$value."<br>";
 } 
 }
 */
    


}
?>
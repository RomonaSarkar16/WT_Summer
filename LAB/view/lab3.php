<?php
include("../control/process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">

<table>
            <tr> <td>First Name: </td>
            <td><input type= "text" name="fname">
            <?php echo $nameerr ?>
            </tr></td>

        <tr><td>Last Name: </td>
        <td><input type="text"  name="lname"></tr></td>

        <tr><td>Age: </td>  
        <td><input type="text" name="age"></tr></td>

        <tr><td>Designation:</td>

        <td><input type="radio" name="designation" value="Junior Programmer" >Junior Programmer

        <input type="radio" name="designation" value="Senior Programmer" >Senior Programmer

        <input type="radio" name="designation" value="Project_Lead" >Project Lead</td></tr>

        <tr><td>Preferred language</td>

        <td><input type="checkbox" name="P_Language" value="java">Java

        <input type="checkbox" name="P_Language" value="php">PHP

        <input type="checkbox" name="P_Language" value="c++">C++
     
    </td></tr>

        <tr><td>E-mail: </td>
            
        <td><input type="text" name="Email"> </tr></td>

        <tr><td>Password: </td>

        <td><input type="password" name="pass"> 
    </tr></td>
       
        <tr><td> Please choose a file </td><td><input type= "file" name ="myfile" value="Choose File"> </td> </tr>

       <tr><td> <input type="submit" name="Submission"value="Submit"> <input type= "reset" value = Reset></td></tr>
</table>


</form>


    
</body>
</html>
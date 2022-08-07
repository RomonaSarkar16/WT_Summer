<?php
include("../Control/Process1.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document practice</title>
</head>
<body>
    <h1>Registration</h1>
    <!-- enctype use when use $_FILES -->
    <form action="" method="POST" enctype ="multipart/form-data" onsubmit="return checkform()">
        <table>
            <tr>
                <td>
                    First Name : 
                </td>
                <td>
                    <input type="text"  name = "fname" id="fname" onkeyup="checkname()" >
                    <p id="nameerror"></p>
                </td>
                
            </tr>
            <tr>
                <td>
                    Last Name :
                </td>
                <td>
                    <input type="text"  name = "lname" id="lname" onkeyup="checkname1()" >
                    <p id="nameerror1"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Age :
                </td>
                <td><input type="text" name="age" id="age" onkeyup="checkage()">
                <p id="ageerror"></p>
</td>
            </tr>
            <tr>
                <td>
                    Designation :
                </td>
                <td><input type="radio" name="designation" id ="junior"  value="Junior"  onclick="getradiovalue()" >Junior Programmer</td>
                <td><input type="radio" name="designation" id ="senior" value="Senior" onclick="getradiovalue()"  >Senior Programmer</td>
                <td><input type="radio" name="designation" id ="lead" value="Lead"  onclick="getradiovalue()" >Project Lead</td>
               <td><br>
               <p id="radiovalue">  
                   Please select a radio</p>
               </td>
            </tr>
            <tr>
                <td>Preferred Language : </td>
                <td><input type="checkbox" name="skills[]" id="check1" value="java" onclick="getchecked()">Java</td>
                  <td> <input type="checkbox" name="skills[]" id="check2" value="php" onclick="getchecked()">PHP</td>
                <td>   <input type="checkbox" name="skills[]" id="check3" value="c++" onclick="getchecked()">C++</td>
                <td>
                <p id="checkederror">PLease select a checkbox</p> <br> 
                </td>

            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="text`" name="email" id="email" onkeyup="emailValid()">
                    <p id="mailerror"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="pass" id="pw" onkeyup="pwcheck()">
                    <p id="pwerror"></p>
                </td>
            </tr>
            <tr>
                <td>
                    PLease choose a file : 
                </td>
                <td>
                <input type="file" name="file" id="file" onchange="return fileValidation()">
                <!-- <div id="imagePreview"></div> -->
                </td>

            </tr>
            <tr>
                <td>
                
                </td>
            </tr>
            <p id="m"></p>
        </table>

        <input type="submit" name="submit" class="button" value="Submit">
                <input type="reset" name="reset" class="button" value="Reset">
    </form>
    <script src="../JS/myjs.js"></script>
</body>
</html>
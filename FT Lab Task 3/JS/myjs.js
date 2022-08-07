function checkname()
{
    var namevalue=document.getElementById("fname").value;
    if(!isNaN(namevalue) || namevalue==""|| namevalue==null )
    {
document.getElementById("nameerror").innerHTML="Name is not corect";
    }
    else
    {
document.getElementById("nameerror").innerHTML="OK";
    }
}
function checkname1()
{
    var namevalue1=document.getElementById("lname").value;
    if(!isNaN(namevalue1) || namevalue1==""|| namevalue1==null )
    {
document.getElementById("nameerror1").innerHTML="Name is not corect";
    }
    else
    {
document.getElementById("nameerror1").innerHTML="OK";
    }
}
function checkage()
{
var age = document.getElementById("age").value;
if(isNaN(age))
{
    document.getElementById("ageerror").innerHTML="Please give a valid age";
}
else
{
    document.getElementById("ageerror").innerHTML="OK";
}

}

function emailValid()
{
    var mail = document.getElementById("email").value;

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var mailstat = validRegex.test(mail);

    if(mailstat)
    {
        document.getElementById("mailerror").innerHTML ="Email OK";
    }
    else
    {
        document.getElementById("mailerror").innerHTML="Error"
    }



}
function pwcheck()
{
    var pw = document.getElementById("pw").value;
    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,15}$/;
    var pwstat = paswd.test(pw);

    if(pwstat)
    {
        document.getElementById("pwerror").innerHTML ="pw OK";
    }
    else
    {
        document.getElementById("pwerror").innerHTML="Error"
    }

   
}
function getradiovalue()
{
    if(document.getElementById("junior").checked == true)
    {
        document.getElementById("radiovalue").innerHTML="Your Designation is Junior";
    }
    else if(document.getElementById("senior").checked == true)
    {
        document.getElementById("radiovalue").innerHTML="Your Designation is Senior";
    }
    else if(document.getElementById("lead").checked == true)
    {
        document.getElementById("radiovalue").innerHTML="Your Designation is Lead";
    }

    else
    {
        document.getElementById("radiovalue").innerHTML="PLease select Your Designation !";
    }
}


function getchecked()
{
    var markedCheckbox = document.getElementsByName('skills[]');
    for (var checkbox of markedCheckbox) {  
        if (checkbox.checked)  
          document.getElementById("checkederror").innerHTML="you have checked";  
      }  
     

}
// function fileval(){
//     //file uploading validation
//     var fileval=document.getElementById("f1").value;
//     var pattern=/\.(jpg|jpeg|png|doc|docx|pdf)$/;
//     if(fileval.match(pattern)){
//         document.getElementById("Fileerror").innerHTML="File is  not correct";
//         return true;

//     }
//     else{
//         document.getElementById("Fileerror").innerHTML="File is  correct";
//         return false;

//     }
// }
function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        //alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        document.getElementById("file").innerHTML="Please upload file having extensions .jpeg/.jpg/.png/.gif only.";
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}


function checkform()
{
    if(checkname()==true && checkname1()== true && emailValid()==true && getradiovalue()== true && pwcheck()==true && getchecked()== true )
    {
        document.getElementById("m").innerHTML="fillp all";
        return true;
    }
    else
    {
        document.getElementById("m").innerHTML="All information is provide";
        return false;
    }
}


// document.getElementById('checkederror').onclick = function() {  
//     var markedCheckbox = document.getElementsByName('skills[]');  
//     for (var checkbox of markedCheckbox) {  
//       if (checkbox.checked)  
//         document.body.append(checkbox.value + ' you checked');  
//     }  
//   }  

// function getradio()
// {

// }

// $(document).ready(function()
// {
//     $("#show").click(function()
//     {

//         $("p").toggle();
//     }
    
//     );

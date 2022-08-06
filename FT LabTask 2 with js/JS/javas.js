function afterclicked()
{
    var a = document.getElementById("myinput").value;
    var b = document.getElementById("myprint");
    b.innerHTML= "the "+a+" was this";

}
function checkname()
{
    //string class
    var namevalue=document.getElementById("name").value;
    if(namevalue.length<6)
    {
document.getElementById("nameerror").innerHTML="Name is not coreect";
    }
    else
    {
document.getElementById("nameerror").innerHTML="OK";
    }
}
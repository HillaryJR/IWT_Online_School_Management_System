function checkpass()
{

        var pass1 = document.myfo.pass1.value;
        var pass2 = document.myfo.pass2.value;
        if(pass1=="" || pass2=="")
        {
            alert("null values");
        }
        else if(pass1==pass2)
        {
            alert("Login Sucessfull");
        }
        else
        {
           alert("password mismatch");
        }
      

}
function passstrng()
{
    var msg;
    var t = document.myfo.pass1.value.length;
    if(t<8)
    {
        msg = "poor";
    }
    else if(t>8)
    {
        msg = "good";
    }
    else if(t>15)
    {
        msg = "perfect";
    }
    document.getElementById("strn").innerText = "Strength : " + msg;

}
function openprofile()
{
    open("html/TeacherProfile.html");
}
function load()
{
    var name = document.fop.uname.value;
    var pass = document.fop.pass.value;
    if(name=="amali" && pass=="123")
    {
        window.open("../index.html","_parent");
        document.getElementById("error").innerHTML=" ";
        
    }
    else if(name=="stu" && pass=="345")
    {
       window.open("StudentProfile.html","_parent");
       document.getElementById("error").innerHTML=" ";
      
    }
    else
    {
        document.getElementById("error").innerHTML="incorrect username or password";
    }
}
function loadpage()
{
    var v = document.markform.subk.value;
    if (v=="ICT")
    {

      window.open("addmark.html","_parent");
      
      
    }
    
}

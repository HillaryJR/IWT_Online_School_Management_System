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
    if(name=="teach123" && pass=="123")
    {
        open("t_inter.html");
    }
    else if(name=="stu345" && pass=="345")
    {
        open("../../../Radesh/Student.html");
       
    }
	else if (name == "Admin567" && pass == "567"){
		
		 open("../../../Manujaya/html/index.html");
        
		
	}
    else
    {
        document.getElementById("error").innerHTML="incorrect username or password";
    }
}















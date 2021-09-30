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
    open("../html/TeacherProfile.php");
}
function load()
{
    var name = document.fop.uname.value;
    var pass = document.fop.pass.value;
    if(name=="teach123" && pass=="123")
    {
        open("../html/t_inter.php","_parent");
		 document.getElementById("error").innerHTML="";
    }
    else if(name=="stu345" && pass=="345")
    {
        open("../../Radesh/html/Student.php","_parent");
        document.getElementById("error").innerHTML="";
    }
	else if (name == "radmin" && pass == "r123"){
		
		 open("../../extra/html/regAdmin.php","_parent");
         document.getElementById("error").innerHTML="";
		
	}
	else if (name == "eadmin" && pass == "e123"){
		
		 open("../../extra/html/evtAdmin.php","_parent");
         document.getElementById("error").innerHTML="";
		
	}
	else if (name == "sadmin" && pass == "s123"){
		
		 open("../../extra/html/subAdmin.php","_parent");
         document.getElementById("error").innerHTML="";
		
	}
    else
    {
        document.getElementById("error").innerHTML="incorrect username or password";
    }
}















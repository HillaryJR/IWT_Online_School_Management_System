function checkPass(){

	var pass1 = document.getElementById("pass1").value;
	var pass2 = document.getElementById("pass2").value;

	if(pass1 == pass2)
	{
		open("../html/f_pass1.php");
	}
	else
	{
		alert("Password mismatch!");
	}
}

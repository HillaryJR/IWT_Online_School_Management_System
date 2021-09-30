function openGrade(){
	var grade = document.myForm.drop.value;
	if(grade == "Grade-6")
	{
		open("../html/grade6_subjects.php");
	}
	else if(grade == "Grade-11")
	{
		open("../html/grade11_subjects.php");
	}
	
	
}

function alter1(){
	var a = document.getElementById("number1").value ;
	document.getElementById("para1").innerHTML = a ;
}

function alter2(){
	var a = document.getElementById("number2").value ;
	document.getElementById("para2").innerHTML = a ;
}

function alter2(){
	var a = document.getElementById("number2").value ;
	document.getElementById("para2").innerHTML = a ;
}

function alter3(){
		 var b = document.getElementById("para3").value;

	
	var a = document.getElementById("number3").value ;
	
	document.getElementById("para3").innerHTML = a ;
	
	 var b = document.getElementById("para3").value;
	if( a == "" )
	{
			document.getElementById("para3").innerHTML = b ;
	}
	
}

function alter4(){
	var a = document.getElementById("number4").value ;
	document.getElementById("para4").innerHTML = a ;
}

function alter5(){
	var a = document.getElementById("number5").value ;
	document.getElementById("para5").innerHTML = a ;
}

function alter6(){
	var a = document.getElementById("number6").value ;
	document.getElementById("para6").innerHTML = a ;
}
function alter7(){
	var a = document.getElementById("number7").value ;
	document.getElementById("para7").innerHTML = a ;
}

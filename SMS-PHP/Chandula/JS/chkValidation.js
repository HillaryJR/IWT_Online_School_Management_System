function checkBtn(){
	if( document.getElementById("fees").checked ){
		document.getElementById("addS").disabled = false ;
	}
	else{
		document.getElementById("addS").disabled = true ;
	}
}

function checkAcc(){
	if( document.getElementById("sid").value == "ST123"){
		window.open("../html/editStudent_2.php");
	}
	else{
		document.getElementById("res").innerHTML = "Invalid Student ID! Try again" 
	}
}
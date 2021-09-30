function chkAgree(){
	
	if(document.getElementById("chk").checked){
		document.getElementById("sbt").disabled = false;
	}
	else{
		document.getElementById("sbt").disabled = true;
	}
}


/* view mark functions */

function calcTotal(){
	var table = document.getElementById("markTable") ;
	var result = 0 ;

	for( var i = 1 ; i <= 10 ; i++ ){
		result = result + parseFloat(document.getElementById("markTable").rows[i].cells[1].innerHTML) ;
	}

	document.getElementById("tot").innerHTML = "Your total is : "+result ;

	return result;
}
function calcAvg(){
	var avg = 0 ;
	 
	avg = calcTotal()/10 ;

	document.getElementById("ave").innerHTML = "Your average is : "+avg ;
}

/* edit mark functions */
function vMark(){
	if (document.getElementById("m1").value < 0 || document.getElementById("m1").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[1].cells.namedItem("s1").innerHTML = document.getElementById("m1").value ;
	}	
}
function Mark1(){
	if (document.getElementById("m2").value < 0 || document.getElementById("m2").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[2].cells.namedItem("s2").innerHTML = document.getElementById("m2").value ;
	}
}
function Mark2(){
	if (document.getElementById("m3").value < 0 || document.getElementById("m3").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[3].cells.namedItem("s3").innerHTML = document.getElementById("m3").value ;
	}
}
function Mark3(){
	if (document.getElementById("m4").value < 0 || document.getElementById("m4").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[4].cells.namedItem("s4").innerHTML = document.getElementById("m4").value ;
	}
}
function Mark4(){
	if (document.getElementById("m5").value < 0 || document.getElementById("m5").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[5].cells.namedItem("s5").innerHTML = document.getElementById("m5").value ;
	}
}
function Mark5(){
	if (document.getElementById("m6").value < 0 || document.getElementById("m6").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[6].cells.namedItem("s6").innerHTML = document.getElementById("m6").value ;
	}
}
function Mark6(){
	if (document.getElementById("m7").value < 0 || document.getElementById("m7").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[7].cells.namedItem("s7").innerHTML = document.getElementById("m7").value ;
	}
}
function Mark7(){
	if (document.getElementById("m8").value < 0 || document.getElementById("m8").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[8].cells.namedItem("s8").innerHTML = document.getElementById("m8").value ;
	}
}
function Mark8(){
	if (document.getElementById("m9").value < 0 || document.getElementById("m9").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[9].cells.namedItem("s9").innerHTML = document.getElementById("m9").value ;
	}
}
function Mark9(){
	if (document.getElementById("m10").value < 0 || document.getElementById("m10").value > 100) {
		alert("Please enter a valid mark");
	}
	else{
		document.getElementById("mainT").rows[10].cells.namedItem("s10").innerHTML = document.getElementById("m10").value ;
	}
}

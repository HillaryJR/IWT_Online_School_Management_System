
//Stop re-accessing previous page.


function preback(){
	window.history.forward();
}
setTimeout("preback()",0);
window.onunload = function(){null};


//Confirm login out 

function logOut(){
	
	var con = confirm("Do you really want to logout ? ");
	
	if(con){
		return true;
	}
	else{
		return false;
	}	
}
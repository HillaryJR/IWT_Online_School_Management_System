function loadData(data)
{
	if( data == 'btn1')
	{
		document.getElementById("img1").src = "images/kandy1.jpg";
		document.getElementById("para").innerHTML = "Kandy Sri Dalada Maligava";
	}
	else if(data == 'btn2')
	{
		document.getElementById("img1").src = "images/colombo.jpg";
		document.getElementById("para").innerHTML = "The Capital of Sri Lanak";
	}
	else if( data == 'btn3')
	{
		document.getElementById("img1").src = "images/trincomalee.jpg";
		document.getElementById("para").innerHTML = "The Natural Harbour In Sri Lanka";
	}
	
}


function init(){
	
	document.getElementById("ap").addEventListener("mouseover", mouseOver);	
}

function doThis(){
	var txt = document.getElementById("ap");
	txt.style.color = "red";
}

function doThat(){
	var txt = document.getElementById("ppp");
	var txt2 = document.getElementById("aaa");
	txt.style.opacity =".85";
	txt.style.transform = "rotate(65deg)";
	txt2.style.opacity =".85";
	txt2.style.transform = "rotate(65deg)";

}
function undoThat(){
	var txt2 = document.getElementById("ppp");
	var txt1 = document.getElementById("aaa");
	txt2.style.opacity ="1";
	txt2.style.transform = "rotate(0deg)";
		txt1.style.opacity ="1";
	txt1.style.transform = "rotate(0deg)";

}




// on mouseout - change text back to black




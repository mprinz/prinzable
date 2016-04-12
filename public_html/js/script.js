var test =document.getElementById("test");
test.addEventListener("mouseover", function(event) {
	event.target.style.color= "red";

	setTimeout(function(){
	event.target.style.color= "";
	},500);

},false);

function popup() {
	document.getElementById("myform").style.display = "block";
}




}



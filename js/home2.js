var btn2 = document.getElementsByClassName("btn2");
var slide = document.getElementById("slide");

btn2[0].onclick = function () {
	slide.style.transform = "translatex(0px)";
	for (i = 0; i < 4; i++) {
		btn2[i].classList.remove("actives");
	}
	this.classList.add("actives");
}
btn2[1].onclick = function () {
	slide.style.transform = "translatex(-800px)";
	for (i = 0; i < 4; i++) {
		btn2[i].classList.remove("actives");
	}
	this.classList.add("actives");
}
btn2[2].onclick = function () {
	slide.style.transform = "translatex(-1600px)";
	for (i = 0; i < 4; i++) {
		btn2[i].classList.remove("actives");
	}
	this.classList.add("actives");
}
btn2[3].onclick = function () {
	slide.style.transform = "translatex(-2400px)";
	for (i = 0; i < 4; i++) {
		btn2[i].classList.remove("actives");
	}
	this.classList.add("actives");
} 

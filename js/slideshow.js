var n = 1;
 slideShow();
 dynamicHeight();
var slideIndex=0;

function slideShow() {
	var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;

    var id_name = "image"+ String(n);
    document.getElementById(id_name).style.display= "inline-block";

    if (n==1) {
        console.log("Setting the first slide colour to white");
        document.getElementById("content").style.color="black";
    }
    else if (n==2) {
        document.getElementById("content").style.color="black";
    }
        else if (n==3) {
        document.getElementById("content").style.color="black";
    }
    n++;
    if (n>3) {
        n=1;
    }
	setTimeout(slideShow, 5000);

}

function updateSlide(a) {
	n=a;
	var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;

    var id_name = "image"+ String(n);
    document.getElementById(id_name).style.display= "inline-block";
    n++;
    if (n>3) {
    	n=1;
    }
}

function choosePage(){
	document.getElementById("home").addEventListener('click', e => {
		console.log("testing...");
		window.location.href = "index.html";
});
}

function dynamicHeight(){
	var sqWidth = document.getElementById("hexagon").style.width;
	var topWidth = document.getElementById("hexagon:before").style.width=sqWidth;
	var botWidth = document.getElementById("hexagon:after").style.width=sqWidth;
}






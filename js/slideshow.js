var n = 1;
changeColorOfHexagon();
slideShow();
onHoverScroll();
myMap();


function onClickQuery(){
		$("#clientInfo").css("display","block");

}

 // dynamicHeight();
var slideIndex=0;
function slideShow() {
	var i;
	console.log("function Slideshow...");
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;

    var id_name = "image"+ String(n);
    document.getElementById(id_name).style.display= "inline-block";

    if (n==1) {
        console.log("Setting the first slide colour to white");
        document.getElementById("content1").style.color="black";
    }
    else if (n==2) {
        document.getElementById("content1").style.color="black";
    }
        else if (n==3) {
        document.getElementById("content1").style.color="black";
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
	console.log("Function UpdateSlide...");
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

function choosePage() {
	document.getElementById("home").addEventListener('click', e => {
		console.log("testing...");
		window.location.href = "index.html";
});
}

// function dynamicHeight(){
// 	var sqWidth = document.getElementById("hexagon").style.width;
// 	var topWidth = document.getElementById("hexagon:before").style.width=sqWidth;
// 	var botWidth = document.getElementById("hexagon:after").style.width=sqWidth;
// }

function print(inputString){
	console.log(inputString);
}

function changeColorOfHexagon(){
	console.log("Setting color of Hexagon on hover...");
	$("#home").hover(function (){hexagonHoverIn('#home');}, function() {hexagonHoverOut('#home');});
	$("#path1").hover(function (){hexagonHoverIn('#path1');}, function() {hexagonHoverOut('#path1');});
	$("#products").hover(function (){hexagonHoverIn('#products');}, function() {hexagonHoverOut('#products');});
	$("#about").hover(function (){hexagonHoverIn('#about');}, function() {hexagonHoverOut('#about');});
	$("#ceo").hover(function (){hexagonHoverIn('#ceo');}, function() {hexagonHoverOut('#ceo');});
	$("#contact").hover(function (){hexagonHoverIn('#contact');}, function() {hexagonHoverOut('#contact');});
	$("#path2").hover(function (){hexagonHoverIn('#path2');}, function() {hexagonHoverOut('#path2');});
	$("#path3").hover(function (){hexagonHoverIn('#path3');}, function() {hexagonHoverOut('#path3');});
	$("#path4").hover(function (){hexagonHoverIn('#path4');}, function() {hexagonHoverOut('#path4');});
	$("#path5").hover(function (){hexagonHoverIn('#path5');}, function() {hexagonHoverOut('#path5');});	
}
// 		//mouse enter
// 		print('mouse entered for ' + String($(this).attr('id')));

// 		$('#path1').css('fill','#6292dad4');
// 		$('#path1').css('stroke','white');
// 		$('#home').css('color','white');

// 	}, function(){
// 		//mouse leave
// 		print('mouse left for '  + String($(this).attr('id')))
//  		$('#path1').css('fill','white');
// 		$('#path1').css('stroke','black');
// 		$('#home').css('color','black');
//  	});

// 	$("#home").hover( function(){
// 		//mouse enter
// 		print('mouse entered for ' + String($(this).attr('id')));

// 		$('#path1').css('fill','#6292dad4');
// 		$('#path1').css('stroke','white');

// 	}, function(){
// 		//mouse leave
// 		print('mouse left for '  + String($(this).attr('id')))
//  		$('#path1').css('fill','white');
// 		$('#path1').css('stroke','black');
//  	});
// }

//this function animates the hexagon when hovered upon

function hexagonHoverIn(hoverElement){
	pathElement='';
	var HOVER = addPathName(hoverElement, pathElement);
	var hoverElement = HOVER[0];
	var pathElement = HOVER[1];

	print('/////////////////////');
	print('entered hexagonHoverIn function');
	print('/////////////////////');
	print('hoverElement = '+hoverElement);
	print('pathElement = '+pathElement);

	$(pathElement).css('fill','#6292dad4');
	$(pathElement).css('stroke','white');
	$(hoverElement).css('color','white');
	}

//this function animates the hexagon when the mouse leaves

function hexagonHoverOut(hoverElement){

	pathElement='';
	var HOVER = addPathName(hoverElement, pathElement);
	var hoverElement = HOVER[0];
	var pathElement = HOVER[1];

	print('/////////////////////');
	print('entered hexagonHoverOUT function');
	print('/////////////////////');
	print('hoverElement = '+hoverElement);
	print('pathElement = '+pathElement);

	print('mouse left for '  + String($(this).attr('id')))
 	$(pathElement).css('fill','white');
	$(pathElement).css('stroke','black');
	$(hoverElement).css('color','black');
 	}

//this function adds the corresponding path name or hover name for each of the elements the mouse hovers on

function addPathName(hoverElement, pathElement){

	print('Entered addPathName function...');

	if (hoverElement== '#home' || hoverElement=='#path1') {
		pathElement= '#path1';
		hoverElement='#home';
	} else if (hoverElement=='#products' || hoverElement=='#path2') {
		pathElement= '#path2';
		hoverElement='#products';
	} else if (hoverElement=='#about' || hoverElement=='#path3') {
		pathElement= '#path3';
		hoverElement='#about';
	} else if (hoverElement=='#ceo' || hoverElement=='#path4') {
		pathElement= '#path4';
		hoverElement= '#ceo'; 
	} else if (hoverElement=='#contact' || hoverElement=='#path5') {
		pathElement= '#path5';
		hoverElement= '#contact';
	} else{
		pathElement = hoverElement;
	}
	print('path Element = '+pathElement);
	print('hover Element = '+hoverElement);

	return [hoverElement, pathElement];
}

function onHoverScroll(){
	
	$("#des1").mouseenter(function(){
		$("#des1").css("overflow-y", "auto");
	  });
	  $("#des1").mouseleave(function(){
		$("#des1").css("overflow-y", "hidden");
	  });

	  $("#des2").mouseenter(function(){
		$("#des2").css("overflow-y", "auto");
	  });
	  $("#des2").mouseleave(function(){
		$("#des2").css("overflow-y", "hidden");
	  });

	  $("#des3").mouseenter(function(){
		$("#des3").css("overflow-y", "auto");
	  });
	  $("#des3").mouseleave(function(){
		$("#des3").css("overflow-y", "hidden");
	  });

}
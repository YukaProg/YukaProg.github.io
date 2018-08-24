// JavaScript Document



var topArea = document.getElementById("flakeSpace");


//divを作るファンクション
function createDiv(theTop, theLeft, theWidth, theHeight, theClassname, theId, elementId){
$('<div id='+theId+' class='+theClassname+' style=\'width:'+theWidth+'px; height:'+theHeight+'px; background-image: url("./images/flake.png"); background-size: '+theWidth+'px '+theHeight+'px; position: absolute; top: '+theTop+'px; left: '+theLeft+'px;\' />').appendTo(elementId);

}


var l, t;
//l = Math.random() * parseInt(topArea.offsetWidth-200);
//t = Math.random() * parseInt(topArea.offsetHeight-200); 

l=topArea.offsetWidth/2;
t = topArea.offsetHeight/2; 

//flakeを生成
//size 40x40 を3こ
for (var i=0; i<3; i++){
var flakeId = "flake"+(i); //flake0~flake2
var l, t;
//l = Math.random() * topArea.offsetWidth;
//t = Math.random() * topArea.offsetHeight; 

createDiv(t, l, "80", "80", "flake", flakeId, topArea);

}

//size 30x30 を10こ
for (var j=0; j<10; j++){
var flakeId = "flake"+(j+3);//flake3~flake12
var l, t;
//l = Math.random() * topArea.offsetWidth;
//t = Math.random() * topArea.offsetHeight; 
createDiv(t, l, "30", "30", "flake", flakeId, topArea);

}

//size 18x18 を5こ
for (var i=0; i<5; i++){
var flakeId = "flake"+(i+13);//flake13~flake17
var l, t;
//l = Math.random() * topArea.offsetWidth;
//t = Math.random() * topArea.offsetHeight; 

createDiv(t, l, "18", "18", "flake", flakeId, topArea);

}

function myMove(flakeID) {
	var elem = document.getElementById(flakeID);   
	var space = document.getElementById('flakeSpace');
	var limitX = parseInt(space.offsetHeight-200);
	var limitY = parseInt(space.offsetWidth-200);
	
	var posX = elem.offsetTop;
	var posY = elem.offsetLeft;
	var speedX = parseInt(Math.random() * 20 - 10);
	var speedY = parseInt(Math.random() * 20 - 10);
//	var deg = parseInt(Math.random() * 60);
	
	var id = setInterval(frame, 60);
	setTimeout(function(){ clearInterval(id);}, 20000); //２０秒後に停止
	
  function frame() {
    if (posX >= limitX || posX<0) {
      speedX = -speedX;
	  posX +=speedX;
	  posY +=speedY;
      elem.style.top = posX + 'px'; 
      elem.style.left = posY + 'px';
//			elem.style.transform  = 'rotate('+deg+'deg)'; 
    }else if(posY >= limitY || posY<0) {
	  speedY = -speedY;
	  posX +=speedX;
	  posY+=speedY;
      elem.style.top = posX + 'px'; 
      elem.style.left = posY + 'px'; 	 
//			elem.style.transform  = 'rotate('+deg+'deg)'; 
	} else {
      posX+=speedX;
	  posY+=speedY;
      elem.style.top = posX + 'px'; 
      elem.style.left = posY + 'px'; 
//			elem.style.transform  = 'rotate('+deg+'deg)'; 
    }
  }
	
	
}

for (var i=0; i<18; i++){
var flakeId = "flake"+i; 
myMove(flakeId);

}
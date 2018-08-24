// JavaScript Document

function spreadImage(imgName, imgName2, spreadarea){
var imageName = imgName;
var imageName2 = imgName2;
var spreadArea = document.getElementById(spreadarea);


//divを作るファンクション
function createDiv(theTop, theLeft, theWidth, theHeight, theRotation, theOpacity, theImagename, theClassname, theId, element){


var newdiv = $('<div/>');
newdiv.attr("id",theId);
newdiv.css({
"top": theTop+"px",
"left": theLeft+"px",
"width": theWidth+"px",
"height": theHeight+"px",
"position": "fixed",
"display": "block",
"background-image": 'url("./images/'+theImagename+'.png")',
"background-size": theWidth+'px '+theHeight+'px',
"transform": 'rotate('+theRotation+'deg)',
"-webkit-transform": 'rotate('+theRotation+'deg)',
"-moz-transform": 'rotate('+theRotation+'deg)',
"opacity": theOpacity
});
//newdiv.css("left", theLeft);
//newdiv.css("width", theWidth);
//newdiv.css("height", theHeight);
//newdiv.css("position", "fixed");
//newdiv.css("display", "block");
//newdiv.css("background-image", 'url("./images/'+imageName+'.png")');
//newdiv.css("background-size", theWidth+'px '+theHeight+'px');
//newdiv.css("transform", 'rotate('+theRotation+'deg)');
//

newdiv.addClass(theClassname);
console.log(newdiv);
newdiv.appendTo(element);

/*$('<div id='+theId+' class='+theClassname+' style=\'width:'+theWidth+'px; display: block; height:'+theHeight+'px; transform: rotate('+theRotation+'deg); background-image: url("./images/'+imageName+'.png"); background-size: '+theWidth+'px '+theHeight+'px; position: fixed; top: '+theTop+'px; left: '+theLeft+'px;\' />').appendTo(element);*/

}


var flakeId, l, t, r;

//flakeを生成
//size 80x80 を3こ
for (var i=0; i<3; i++){
flakeId = "flower"+(i); //flake0~flake2
l = Math.random() * parseInt(spreadArea.offsetWidth-200);
t = Math.random() * parseInt(spreadArea.offsetHeight-200); 
r = parseInt(Math.random() * 360); 
o =  (Math.random() * 0.5 + 0.5).toFixed(2); 
console.log(o);
createDiv(t, l, "200", "200", r, o, imageName, "flower", r, flakeId, spreadArea);
}

//size 30x30 を10こ
for (var j=0; j<10; j++){
flakeId = "flower"+(j+3);//flake3~flake12
l = Math.random() * parseInt(spreadArea.offsetWidth-200);
t = Math.random() * parseInt(spreadArea.offsetHeight-200); 
r = parseInt(Math.random() * 360); 
o =  (Math.random() * 0.5 + 0.5).toFixed(2); 
console.log(o);
createDiv(t, l, "80", "80", r, o, imageName, "flower", flakeId, spreadArea);

}

//size 18x18 を5こ
for (var k=0; k<5; k++){
flakeId = "flower"+(k+13);//flake13~flake17
l = Math.random() * parseInt(spreadArea.offsetWidth-200);
t = Math.random() * parseInt(spreadArea.offsetHeight-200); 
r = parseInt(Math.random() * 360); 
o =  (Math.random() * 0.5 + 0.5).toFixed(2); 
console.log(o);
createDiv(t, l, "150", "150", r, o, imageName2, "flower", flakeId, spreadArea);

}

//size 18x18 を5こ
for (var f=0; f<2; f++){
flakeId = "flower"+(f+18);//flake18~flake19
l = Math.random() * parseInt(spreadArea.offsetWidth-200);
t = Math.random() * parseInt(spreadArea.offsetHeight-200); 
r = parseInt(Math.random() * 360); 
o =  (Math.random() * 0.5 + 0.5).toFixed(2); 
console.log(o);
createDiv(t, l, "400", "400", r, o, imageName, "flower", flakeId, spreadArea);

}


}
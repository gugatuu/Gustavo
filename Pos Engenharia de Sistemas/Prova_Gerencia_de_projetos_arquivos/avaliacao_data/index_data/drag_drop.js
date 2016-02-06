/*function initDragDrop() {
__dragX = 0; 
__dragY = 0; 
__dragId = ''; 
__dragging = false;
document.body.onmousedown = __dragDown;
document.body.onmousemove = __dragMove;
document.body.onmouseup = function() { __dragging = false; };
}

function __dragDown(e) {
e = e ? e : window.event;
__dragEl = document.getElementById(__dragId) || null;
var _target = document.all ? e.srcElement : e.target;
  if(!__dragEl || !(/drag/.test(_target.className))) return;
__dragX = e.clientX - __dragEl.offsetLeft;
__dragY = e.clientY - __dragEl.offsetTop;
__dragging = true;
};

function __dragMove(e) {
	if(typeof __dragging == 'undefined' || !__dragging) return;
e = e ? e : window.event;
__dragEl.style.left = (e.clientX - __dragX)+'px';
__dragEl.style.top = (e.clientY - __dragY)+'px';
};
*/


/*
var objSelecionado = null;
var mouseOffset = null;
function addEvent(obj, evType, fn) { //Função adaptada da original de Christian Heilmann, em [url="http://www.onlinetools.org/articles/unobtrusivejavascript/chapter4.html"]http://www.onlinetools.org/articles/unobtrusivejavascript/chapter4.html[/url]
if (typeof obj == "string") {
  if (null == (obj = document.getElementById(obj))) {
   throw new Error("Elemento HTML não encontrado. Não foi possível adicionar o evento.");
  }
}
if (obj.attachEvent) {
  return obj.attachEvent(("on" + evType), fn);
} else if (obj.addEventListener) {
  return obj.addEventListener(evType, fn, true);
} else {
  throw new Error("Seu browser não suporta adição de eventos.");
}
}
document.onmousemove = function(ev) {
var ev = ev || window.event;
var mousePos = mouseCoords(ev);
if (objSelecionado) {
  document.getElementById(objSelecionado).style.left = mousePos.x - mouseOffset.x + 'px';
  document.getElementById(objSelecionado).style.top = mousePos.y - mouseOffset.y + 'px';
  document.getElementById(objSelecionado).style.margin = '0px';
  return false;
}
}
function mouseCoords(ev){
if(ev.pageX || ev.pageY){
  return {x:ev.pageX, y:ev.pageY};
}
return {
  x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
  y:ev.clientY + document.body.scrollTop  - document.body.clientTop
};
}
function getPosition(e, ev){
e = document.getElementById(e);
var left = 0;
var top  = 0;
var coords = mouseCoords(ev);
while (e.offsetParent){
  left += e.offsetLeft;
  top  += e.offsetTop;
  e     = e.offsetParent;
}
left += e.offsetLeft;
top  += e.offsetTop;
return {x: coords.x - left, y: coords.y - top};
}
document.onmouseup = function() {
objSelecionado = null;
}
function dragdrop(local_click, caixa_movida) {
document.getElementById(local_click).style.cursor = 'move';
addEvent(local_click, 'mousedown', function(ev) {
  objSelecionado = caixa_movida;
  mouseOffset = getPosition(objSelecionado, ev);
});
}*/


<!--

var ie=document.all;
var nn6=document.getElementById&&!document.all;

var isdrag=false;
var x,y;
var dobj;

function movemouse(e)
{
  if (isdrag)
  {
    dobj.style.left = nn6 ? tx + e.clientX - x : tx + event.clientX - x;
    dobj.style.top  = nn6 ? ty + e.clientY - y : ty + event.clientY - y;
    return false;
  }
}

function selectmouse(e) 
{
  var fobj       = nn6 ? e.target : event.srcElement;
  var topelement = nn6 ? "HTML" : "BODY";

  while (fobj.tagName != topelement && fobj.className != "dragme")
  {
    fobj = nn6 ? fobj.parentNode : fobj.parentElement;
  }

  if (fobj.className=="dragme")
  {
    isdrag = true;
    dobj = fobj;
    tx = parseInt(dobj.style.left+0);
    ty = parseInt(dobj.style.top+0);
    x = nn6 ? e.clientX : event.clientX;
    y = nn6 ? e.clientY : event.clientY;
    document.onmousemove=movemouse;
    return false;
  }
}

document.onmousedown=selectmouse;
document.onmouseup=new Function("isdrag=false");

//-->


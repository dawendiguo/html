var xml=createXml();
var isdown=false;
var beginx,beginy;
function down(){
    isdown=true;
}
function move(obj){
    if(isdown){
        var endx=event.clientX;
        var endy=event.clienY;
        obj.style.left=parseInt(obj.style.left())+endX-beginx;
        obj.style.top=parseInt(obj.style.top())+endY-beginy;
    }
    beginx=event.clientX;
    beginy=event.clienY;
}
function up(){
    isdown=false;
}

function over(obj){
    obj.style.zIndex=obj.style.zIndex+1;
}

function save(){
    var obj1=document.getElementById('div1');
    var obj2=document.getElementById('div2');
    var l_1=obj1.style.left;
    var t_1=obj1.style.top;
    var l_2=obj2.style.left;
    var t_2=obj2.style.top;

    var url="


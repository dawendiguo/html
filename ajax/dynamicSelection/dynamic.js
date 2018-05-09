//define main array
var arr_m=new Array();
//define first level array
arr_m[0]=new Array();
arr_m[1]=new Array();
arr_m[2]=new Array();
//define the second level array on Array first.
arr_m[0][0]=new Array();
arr_m[0][1]=new Array();
arr_m[0][2]=new Array();
arr_m[0][3]=new Array();
//define the second level array on Array second.
arr_m[1][0]=new Array();
arr_m[1][1]=new Array();
arr_m[1][2]=new Array();
//define the second level array on Array third.
arr_m[2][0]=new Array();
arr_m[2][1]=new Array();
//define array element.
arr_m[0][0][0]='1';
arr_m[0][0][1]='1-1';
arr_m[0][0][2]='1-2';
arr_m[0][0][3]='1-3';

arr_m[0][1][0]='1-1-1';
arr_m[0][1][1]='1-1-2';
arr_m[0][1][2]='1-1-3';

arr_m[0][2][0]='1-2-1';
arr_m[0][2][1]='1-2-2';
arr_m[0][2][2]='1-2-3';

arr_m[0][3][0]='1-3-1';
arr_m[0][3][1]='1-3-2';

arr_m[1][0][0]='2';
arr_m[1][0][1]='2-1';
arr_m[1][0][2]='2-2';

arr_m[1][1][0]='2-1-1';
arr_m[1][1][1]='2-1-2';

arr_m[1][2][0]='2-2-1';
arr_m[1][2][1]='2-2-2';

arr_m[2][0][0]='3';
arr_m[2][0][1]='3-1';
arr_m[2][1][0]='3-1-1';

function init(){
    obj1=document.getElementById('s_1');
    obj2=document.getElementById('s_2');
    obj3=document.getElementById('s_3');
    for(var i=0;i<arr_m.length;i++){        //foreach first level 
        op=document.createElement("option");
        op_text=document.createTextNode(arr_m[i][0][0]);
        op.appendChild(op_text);
        op.setAttribute("value",arr_m[i][0][0]);
        obj1.appendChild(op);
    }
    for(var i=1;i<arr_m[0][0].length;i++){      //foreach second level
        op=document.createElement('option');
        op_text=document.createTextNode(arr_m[0][0][i]);
        op.appendChild(op_text);
        op.setAttribute('value',arr_m[0][0][i]);
        obj2.appendChild(op);
    }
    for(var i=0;i<arr_m[0][1].length;i++){
        op=document.createElement('option');
        op_text=document.createTextNode(arr_m[0][1][i]);
        op.appendChild(op_text);
        op.setAttribute('value',arr_m[0][1][i]);
        obj3.appendChild(op);
    }
}

function change_1(t){
    obj1=document.getElementById('s_1');
    obj2=document.getElementById('s_2');
    obj3=document.getElementById('s_3');
    while(obj2.hasChildNodes()){
        obj2.removeChild(obj2.childNodes[0]);
    }
    while(obj3.hasChildNodes()){
        obj3.removeChild(obj3.childNodes[0]);
    }
    for(var i=1;i<arr_m[t][0].length;i++){
        op=document.createElement('option');
        op_text=document.createTextNode(arr_m[t][0][i]);
        op.appendChild(op_text);
        op.setAttribute('value',arr_m[t][0][i]);
        obj2.appendChild(op);
    }
    for(var i=0;i<arr_m[t][1].length;i++){
        op=document.createElement('option');
        op_text=document.createTextNode(arr_m[t][1][i]);
        op.appendChild(op_text);
        op.setAttribute('value',arr_m[t][1][i]);
        obj3.appendChild(op);
    }
}
function change_2(t){
    obj1=document.getElementById('s_1');
    obj2=document.getElementById('s_2');
    obj3=document.getElementById('s_3');
    n=obj1.selectedIndex;
    while(obj3.hasChildNodes()){
        obj3.removeChild(obj3.childNodes[0]);
    }
    for(var i=0;i<arr_m[n][t+1].length;i++){
        op=document.createElement('option');
        op_text=document.createTextNode(arr_m[n][t+1][i]);
        op.appendChild(op_text);
        op.setAttribute('value',arr_m[n][t+1][i]);
        obj3.appendChild(op);
    }
}
function go(){
    obj1=document.getElementById('s_1');
    obj2=document.getElementById('s_2');
    obj3=document.getElementById('s_3');
    str="select result:";
    str=str+'first level:'+obj1.value+" second level: "+ obj2.value +" third level "+ obj3.value;
    document.getElementById('r').innerHTML=str;
}

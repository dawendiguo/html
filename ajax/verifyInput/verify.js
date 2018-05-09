function check_u(){
    var obj1=document.getElementById('username');
    var obj2=document.getElementById('u_e');
    while(obj2.hasChildNodes()){
        obj2.removeChild(obj2.childNodes[0]);
    }
    var pattern=/[^\x00-\xff]/g;
    if(pattern.test(obj1.value)||obj1.value==""){
        sub_t=document.createTextNode("username can't include chinese,or can't empty");
        obj2.appendChild(sub_t);
    }
}

function check_p(){
    obj1=document.getElementById('password');
    obj2=document.getElementById('p_e');
    while(obj2.hasChildNodes()){
        obj2.removeChild(obj2.childNodes[0]);
    }
    var pattern = /^\w+$/;
    if(!pattern.test(obj1.value)||obj1.value==''){
        sub_t=document.createTextNode("password must be word.number or '_', can not be empty");
        obj2.appendChild(sub_t);
    }
}

function check_m(){
    var obj1=document.getElementById('mail');
    var obj2=document.getElementById('m_e');
    while(obj2.hasChildNodes()){
        obj2.removeChild(obj2.childNodes[0]);
    }
    var pattern=/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
    if(!pattern.test(obj1.value)||obj1.value==''){
        sub_t = document.createTextNode("Email illigal or empty");
        obj2.appendChild(sub_t);
    }
}

function check_t(){
    var obj1=document.getElementById('text');
    var obj2=document.getElementById('t_e');
    while(obj2.hasChildNodes()){
        obj2.removeChild(obj2.childNodes[0]);
    }
    if(obj1.value.length > 100){
        sub_t = document.createTextNode("input lenght is too long which can not bigger than 100");
        obj2.appendChild(sub_t);
    }
}

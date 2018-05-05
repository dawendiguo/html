function createXml(){
    var XMLHttp;
    if(window.XMLHttpRequest){
        XMLHttp = new XMLHttpRequest();
    }
    else if(ActiveXObject){
        XMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else{
        alert("你的浏览器不支持AJAX");
        return false;
    }
    return XMLHttp;
}

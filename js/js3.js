function $$(id){
    return getElementById(id);
}

function file_size(f){
    var strLi = <li class=li>
        strLi = strLi + <span>文件名称</span>
        strLi = strLi + <span>文件类型</span>
        strLi = strLi + <span>文件大小</span>        strLi = strLi + </li>
        for(var intI = 0; intI < f.length; intI++){
            var fileTmp = f[intI];
            strLi=strLi+<li>;
            strLi=strLi+ <span>fileTmp.name</span>;
            strLi=strLi+ <span>fileTmp.type</span>;
            strLi=strLi+ <span>fileTmp.size KB</span>;
            strLi=strLi+</li>;
        }
    $$("ulUpload").innerHTML=strLi;
}

function $$(id){
    return getElementById(id);
}

function showKeyWord(){
    var strTmp = "<b>你输入的职业是:</b>;"
    strTmp = strTmp + $$(txtWork).value;
    $$(pTip).innerHTML=strTmp;
    return false;
}

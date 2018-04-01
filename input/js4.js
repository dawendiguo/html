function $$(id){
    return getElementById(id);
}

var intR,intG,intB,strColorn;
function setSpnColor(){
    intR=$$(txtR).value;
    intB=$$(txtB).value;
    intG=$$(txtG).value;
    strColorn=rgb(intR,intG,intB);
    $$(pColor).innerHTML=strColorn;
    $$(spnPrev).style.backgroundColor=strColorn;
}
setSpnColor();

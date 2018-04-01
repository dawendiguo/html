var tmpExample={
    ready:function(){
    var date = new Date();
    var week = date.getDay();
    if(week == 5)
        alert("注意了您今天限号哦！亲");
    }
};

$(document).ready(tmpExample.ready);

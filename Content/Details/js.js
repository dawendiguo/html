var temExample = {
    ready:function(){
        var link = window.location.href;
        var menuElement = window.parent.menu.document;
        var pStr = menuElement.getElementsByTagName('p');
        for(var i = 0;i < pStr.length;i++){
            if(link.indexOf(pStr[i].innerHTML)!=-1){
               $(pStr).removeClass('menuSelect');
                $(pStr[i]).addClass('menuSelect');
            }
            }
            }
            };
$(document).ready(temExample.ready);

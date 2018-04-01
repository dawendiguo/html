var tmpExample = {
    ready:function(){
        $('ul#tmpSlapstick li').not('li.tmpThreeStooges').addClass('tmpFunny');
        $('ul#tmpSlapstick li').slice('8').addClass('tmpSlice');
        $('ul#tmpSlapstick li').slice(0,5).addClass('tmpCenter');
    }
};

$(document).ready(tmpExample.ready);

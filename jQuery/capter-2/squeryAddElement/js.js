var tmpExample = {
    ready:function(){   
        $('ul#tmpMarxBrothers li').add('ul#tmpAbbottAndCostello li').addClass('tmpReallyFunny');
        $('ul#tmpMarxBrothers li').eq(2).addClass('tmpBold');
    }
};
$(document).ready(tmpExample.ready);

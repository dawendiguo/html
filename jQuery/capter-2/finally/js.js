var tmpExample = {
    ready:function(){
        //Find all <input> elements and add a click event.
        $('a').click(tmpExample.findElements);
    },
    findElements:function($e){
        //Prevent the default action,navigating to the link.
        $e.preventDefault();
        //Reset the example before applying the next.
        $('*').removeClass('tmpExample');

        switch(this.id){
            case 'tmpFind':
                {
                    //If the id of "this" <input> element contains "Find",
                    //Do the find() example.
                    $('ul').find('li').addClass('tmpExample');
                    break;
                }
            case 'tmpSiblings':
                {
                    $('li#tmpCarrot').siblings().addClass('tmpExample');
                    break;
                }
            case 'tmpNext':
                {
                    $('li#tmpCarrot').next().addClass('tmpExample');
                    break;
                }
            case 'tmpPrev':
                {
                    $('li#tmpBroccoli').prev().addClass('tmpExample');
                    break;
                }
           case 'tmpNextAll':
                {
                    $('li#tmpOrange').nextAll().addClass('tmpExample');
                    break;
                }
           case 'tmpPrevAll':
                {
                    $('li#tmpOrange').prevAll().addClass('tmpExample');
                    break;
                }
           case 'tmpVegetables':
                {
                    $('li#tmpOrange').prevAll('li.tmpVegetables').add


$(document).ready(
    function(){
        $('div').bind(
                'mouseover',
                function(){
                    $(this).addClass('tmpExampleOver');
                }
                );

        $('div').bind(
                'mouseout',
                function(){
                    $(this).removeClass('tmpExampleOver');
                }
                );
        $('div').bind(
                'click',
                function(){
                    if(!$(this).hasClass('tmpExampleOn')){
                        $(this).addClass('tmpExampleOn');
                    }
                    else{
                        $(this).removeClass('tmpExampleOn');
                    }
                    }
                    );

            }
            );



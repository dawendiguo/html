$(document).ready(
        function(){
            $('div').hover(
                function(){
                    $(this).attr('id','tmpExample');
                    $(this).text('This Element\'s ID is: '+$(this).attr('id'));
                }
                ,
                function(){
                    $(this).attr('id','');
                    $(this).text('This Element\'s ID has been removed.');
                }
                );
            }
                );


var tmpExample = {
    ready : function(){
        $('input#tmpDialogOpen').click(
            function($e){
                $e.preventDefault();
                $('div#tmpDialogue').addClass('tmpDialogOn');
            }
            );
        $('input#tmpDialogClose').click(
                function($e){
                    $e.preventDefault();
                    $('div#tmpDialogue').removeClass('tmpDialogOn');
                }
                );
    }
}
$(document).ready(tmpExample.ready);

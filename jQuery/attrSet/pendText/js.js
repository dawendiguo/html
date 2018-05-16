$(document).ready(
        function(){
            $('input#tmpAddAlbum').click(
                    function($e){
                        $e.preventDefault();
                        $('table tbody').append(
                                "<tr> \n"+
                                " <td> \n"+
                                "   <input type='text' value='Double Fantasy' size='25' />\n"+
                                "</td>\n"+
                                " <td>1980</td>\n"+
                                "</tr>\n");
                        $('table tbody').prepend(
                                "<tr> \n"+
                                " <td> \n"+
                                "   <input type='text' value='dawendiguo test' size='25' />\n"+
                                "</td>\n"+
                                " <td>2018</td>\n"+
                                "</tr>\n");
                    }
                    );
        }
);

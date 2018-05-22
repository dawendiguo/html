$(document).ready(
        function(){
            $('input#tmpQuote1').click(
                    function($e){
                        $e.preventDefault();

                        $(this).replaceWith(
                                " <p> I would imagine that if you could understand Morse code, a tap dancer would dirve you crazy.</p>"
                                );
                    }
                    );

            $('input#tmpQuote2').click(
                    function($e){
                        $e.preventDefault();

                        $(this).replaceWith(
                                " <p> I'd like to get four people who do cart wheels very good and make a cart.</p>");
                    }
                    );
        }
);

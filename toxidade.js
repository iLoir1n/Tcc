$( "#quemESelect" ).change(function() {
               
    const select = $(this).val()
    if(select == 'jogador'){
        $( "#jogador" ).slideDown( "slow", function() {
            // Animation complete.
        });

        $( "#amigo_jogador" ).slideUp( "slow", function() {
            // Animation complete.
        });
    }else if(select == 'amigo_jogador') {
        $( "#amigo_jogador" ).slideDown( "slow", function() {
            // Animation complete.
        });

        $( "#jogador" ).slideUp( "slow", function() {
            // Animation complete.
        });
    }else{
        $( "#jogador" ).slideUp( "slow", function() {
            // Animation complete.
        });
        $( "#amigo_jogador" ).slideUp( "slow", function() {
            // Animation complete.
        });
    }

   

    
    
    
});

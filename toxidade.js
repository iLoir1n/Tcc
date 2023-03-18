$( "#quemESelect" ).change(function() {
               
    const select = $(this).val()
    
    if(select == 'responsavel'){
        $( "#responsavel" ).slideDown( "slow", function() {
            // Animation complete.
        });

        $( "#jogador" ).slideUp( "slow", function() {
            // Animation complete.
        });
    }else if(select == 'jogador') {
        $( "#jogador" ).slideDown( "slow", function() {
            // Animation complete.
        });

        $( "#responsavel" ).slideUp( "slow", function() {
            // Animation complete.
        });
    }else{
        $( "#responsavel" ).slideUp( "slow", function() {
            // Animation complete.
        });
        $( "#jogador" ).slideUp( "slow", function() {
            // Animation complete.
        });
    }

   

    
    
    
});

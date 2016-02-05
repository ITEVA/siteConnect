$(document).ready(function(){  
    $("#formContato").submit(function(){
        $.ajax({
        method: "POST",
        url: "Emails/emailContato.php",
        data: {nome:$('#nome').val(), email:$('#email').val(),
              mensagem:$('#mensagem').val()}
        }).done(function( msg ) {
            alert( msg );
          });
    });
});
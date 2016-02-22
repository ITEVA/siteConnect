$(document).ready(function(){
    $('div#emailSucesso').css("display", "none");
    $("#formContato").submit(function(){
        $.ajax({
        method: "POST",
        url: "Emails/emailContato.php",
        data: {nome:$('#nome').val(), email:$('#email').val(),
              mensagem:$('#mensagem').val()}
        }).done(function() {
        });
        

        $('div#emailSucesso').css("display", "block");      

        $("#formContato").each(function(){
           this.reset();
        });
        
        setTimeout(
            function(){ 
                location.reload();
            },3000
        );
        return false;
    });
  });



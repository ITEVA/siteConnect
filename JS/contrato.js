$(document).ready(function(){  
    $('div#emailSucesso').css("display", "none");
    $("#telefone").mask("(99) 9999-9999");
    $("#celular").mask("(99) 99999-9999");
    
    $("#formContrato").submit(function(){
        $.ajax({
        method: "POST",
        url: "Emails/emailContratoCliente.php",
        data: {nome:$('#nome').val(), email:$('#email').val(),
              celular:$('#celular').val(), telefone:$('#telefone').val(),
              rua:$('#rua').val(), bairro:$('#sel1').val(),
              numero:$('#numero').val(), complemento:$('#complemento').val()}
        
        }).done(function( ) {
        });

        $.ajax({
        method: "POST",
        url: "Emails/emailContratoConnect.php",
        data: {nome:$('#nome').val(), email:$('#email').val(),
              celular:$('#celular').val(), telefone:$('#telefone').val(),
              rua:$('#rua').val(), bairro:$('#sel1').val(),
              numero:$('#numero').val(), complemento:$('#complemento').val()}
        
        }).done(function() {
        });

        $('div#emailSucesso').css("display", "block");

        setTimeout(
            function(){ 
                location.reload();
            },3000
        ); 

        return false;
    });
});

function numeros(){
    var tecla = event.keyCode;
    if (tecla >= 48 && tecla <= 57){
        return true;
    }else{
        return false;
    }
}

function letras(){
    var tecla = event.keyCode;
    if (tecla >= 48 && tecla <= 57){
        return false;
    }else{
        return true;
    }
}


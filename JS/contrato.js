jQuery(function($){
    $("#telefone").mask("(99) 9999-9999");
    $("#celular").mask("(99) 99999-9999");

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
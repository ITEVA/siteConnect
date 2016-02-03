<?php

/* Inclui página de enviar email */
require("Emails/EnviarEmail.php");

/**
* Inclui classes de envio de email
*/
require_once('Classes/mail/class.phpmailer.php');
require_once('Classes/mail/class.smtp.php');
        
//$destinatario = 'contato@connectja.com.br' ;

$mensagem2 = "<p><b>Nome: </b>".$_POST['nome']."</p>"
            ."<p><b>Email: </b>".$_POST['email']."</p>"
            ."<p>".$_POST['mensagem']."</p>"; 

sendMail('Fale Conosco - Site Connect',$mensagem2,'gisellyazevedo@hotmail.com','Connect - Internet Banda Larga', NULL, NULL, NULL, 'Images/logoConnect.jpg');
?>
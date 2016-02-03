<?php

/* Inclui página de enviar email */
require("EnviarEmail.php");

/**
* Inclui classes de envio de email
*/
require_once('../Classes/mail/class.phpmailer.php');
require_once('../Classes/mail/class.smtp.php');

//$destinatario = 'contato@connectja.com.br';

$mensagem2 = "<p>Uma solicitação para verificar planos e orçamento foi realizada!</p>"
            ."<p>Segue abaixo as informações do cliente.</p>"
            ."<p><b>Nome: </b>".$_POST['nome']."</p>" 
            ."<p><b>Email: </b>".$_POST['email']."</p>"
            ."<p><b>Telefone: </b>".$_POST['telefone']. "&nbsp;&nbsp;<b>Celular: </b>".$_POST['celular']."</p>"
            ."<p><b>Rua: </b>".$_POST['rua']."</p>"
            ."<p><b>Bairro: </b>".$_POST['bairro']."&nbsp;&nbsp;<b>Número: </b>".$_POST['numero']."</p>"
            ."<p><b>Complemento: </b>".$_POST['complemento']."</p>";
sendMail('Solicitação de orçamento',$mensagem2,'gisellyazevedo@hotmail.com','Connect - Internet Banda Larga', NULL, NULL, NULL,'../Images/logoConnect.jpg');
?>
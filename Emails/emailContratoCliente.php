<?php

/* Inclui página de enviar email */
require("EnviarEmail.php");

/**
* Inclui classes de envio de email
*/
require_once('../Classes/mail/class.phpmailer.php');
require_once('../Classes/mail/class.smtp.php');

$mensagem2 = "<div>"
        . "<img src='cid:connect'>"
        . "</div>";
$anexo = '../planosConnect.docx';
sendMail('Planos Disponíveis - Connect', $mensagem2, $_POST['email'], $_POST['nome'], NULL, NULL, $anexo, '../Images/emailContratoCliente.jpg');
?>
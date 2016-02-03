<?php

/* Inclui página de enviar email */
require("EnviarEmail.php");

/**
* Inclui classes de envio de email
*/
require_once('../Classes/mail/class.phpmailer.php');
require_once('../Classes/mail/class.smtp.php');

$mensagem2 = "</br></br>Segue em anexo um arquivo com os planos oferecidos pela connect,"
             . "para mais informações entre em contato conosco pelo telefone"
             . "(xx)xxxx-xxxx ou pelo email contato@connectja.com.br.</br></br>";
$anexo = '../planosConnect.docx';
sendMail('Planos Disponíveis - Connect', $mensagem2, $_POST['email'], $_POST['nome'], NULL, NULL, $anexo, '../Images/logoConnect.jpg');
?>
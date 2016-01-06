<?php

/* Inclui a classe do phpmailer */				
require("Classes/mail/PHPMailerAutoload.php");

/* Cria uma Instância da classe */
$mail = new PHPMailer();

/* 
 * CONFIGURAÇÕES BÁSICAS 
 *
 */
$remetente = 'giselly.reboucas@iteva.org.br';
$nomeRemetente = 'Mensagem Site Connect';
$senha = 'Iteva100';

$destinatario = 'gisellyazevedo@hotmail.com' ;
$nomeDestinatario  = 'Connect - Internet Banda Larga';
/* Servidor */
$host = 'smtp.office365.com';
$assunto = 'Fale Conosco - Site Connect';
$mensagem =  '<p>Nome: '.$_POST['nome'].'</p>'
            .'<p>Email: '.$_POST['email'].'</p>'
            .$_POST['mensagem'];

/* Configura os destinatários */
$mail->AddAddress(utf8_decode($destinatario), utf8_decode($nomeDestinatario));
 
/* 
 * CONFIGURAÇÕES AVANÇADAS 
 * 
 */
				
/* Define que é uma conexão SMTP */
$mail->IsSMTP();
/* Define o endereço do servidor de envio */
$mail->Host = $host;
/* Utilizar autenticação SMTP */ 
$mail->SMTPAuth = true;
/* Protocolo da conexão */
$mail->SMTPSecure = "tls";
/* Porta da conexão */
$mail->Port = "587";
/* Email ou usu�rio para autenticação */
$mail->Username = $remetente;
/* Senha do usu�rio */
$mail->Password = $senha;
 
/* Configura os dados do remetente do email */
$mail->From = $remetente; // Seu e-mail
$mail->FromName = $nomeRemetente; // Seu nome
 
/* Configura a mensagem */
$mail->IsHTML(true); // Configura um e-mail em HTML
 
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
 
/* Configura o texto e assunto */
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = $mensagem; // A mensagem em HTML
 
/* Envia o email */
$email_enviado = $mail->Send();

?>
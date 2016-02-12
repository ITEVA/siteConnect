<?php
            
    function sendMail($assunto,$mensagem,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo){
            
        $mail = new PHPMailer(); //INICIA A CLASSE
        $mail->IsSMTP(); //Habilita envio SMPT
        $mail->SMTPAuth = true; //Ativa email autenticado
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
        
        /* Protocolo da conexão */
        //$mail->SMTPSecure = "ssl";

        $mail->Host = 'connectja.com.br'; //Servidor de envio
        $mail->Port = 25 ; //Porta de envio
        $mail->Username = 'site@connectja.com.br'; //email para smtp autenticado
        $mail->Password = 'connectja123'; //seleciona a porta de envio

        $mail->From = 'site@connectja.com.br'; //remetente
        $mail->FromName = 'Connect - Internet Banda Larga'; //nome remetente

        /* Enviar imagem */
        $mail->AddEmbeddedImage($logo, 'connect');
        
        if($reply != NULL){
            $mail->AddReplyTo($reply,$replyNome);
        }
        
        if($anexo != NULL){
            $mail->AddAttachment($anexo);
        }

        $mail->Subject = $assunto; //assunto
        $mail->Body = $mensagem; //mensagem
        $mail->AddAddress($destino,$nomeDestino); //email e nome do destino

        if($mail->Send()){
            return true;
        }else {
            exit();
            return false;
        }
    }
?> 
<?php
    function sendMail($assunto,$mensagem2,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo){

        $mail = new PHPMailer(); //INICIA A CLASSE
        $mail->IsSMTP(); //Habilita envio SMPT
        $mail->SMTPAuth = true; //Ativa email autenticado
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
        
        /* Protocolo da conexão */
        $mail->SMTPSecure = "ssl";

        $mail->Host = 'smtp.gmail.com'; //Servidor de envio
        $mail->Port = 465 ; //Porta de envio
        $mail->Username = 'josinaldosb@gmail.com'; //email para smtp autenticado
        $mail->Password = 'jo22sb11'; //seleciona a porta de envio

        $mail->From = 'no-reply@connectja.com.br'; //remetente
        $mail->FromName = 'Connect - Internet Banda Larga'; //nome remetente
        
        /* Formato padrão da mensagem */
            $mensagem = "<div style='display: block; position: relative; max-width: 800px; width: auto; min-height: 400px; height: auto; border: 2px solid #004c98;'>
            <div style='display: block; position: relative; padding-left: 175px; padding-right: 175px; padding-top: 15px;'>
                <img src='cid:connect'>
            </div>
            <div style='display: block; position: relative; margin: 5px; padding: 20px; font-size: 14pt;'>"
            .$mensagem2
            ."<a href='http://connect.iteva.org.br' style='display: block; text-align: center; font-size: 14pt;'>Connect - Internet Banda Larga</a>
            </div>
        </div>"; 
        
        
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
            return false;
        }
    }
?>
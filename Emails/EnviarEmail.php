<?php
            
    function sendMail($assunto,$mensagem2,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo){
            
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
            echo 'Deu certo!!!';
            exit();
            return true;
        }else {
            echo 'o Nicolau é chato pacas!!!';
            exit();
            return false;
        }
    }
?> 
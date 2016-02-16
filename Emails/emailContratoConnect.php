<?php

/* Inclui página de enviar email */
require("EnviarEmail.php");

/**
* Inclui classes de envio de email
*/
require_once('../Classes/mail/class.phpmailer.php');
require_once('../Classes/mail/class.smtp.php');

//$destinatario = 'contato@connectja.com.br';

$mensagem2 = $mensagem2 ="<body style='background-color: #d4d4d4;'>
                <div style='display: block; position:absolute; max-width: 40%; width: auto;  min-height: 502px; border: 2px solid #2c3f70; border-bottom: 25px solid #2c3f70; background-color: #fff; padding: 1.5%;'>
                    <div style='display: block; position: relative; float: left; max-width: 60%; width: auto; height: 60px; left: 0.5%; top: 1%;'>
                        <img src='cid:connect' style='width: 180px; height: 60px;'/>
                    </div>

                    <div style='display: block; position: absolute; font-size: 14pt; top: 120px; text-align: left;'>
                        <br/>Uma solicitação para verificar planos e orçamento foi realizada!<br/>
                        Segue abaixo as informações do cliente.".
                    "<br/></div>

                    <div style='display: block; position: relative; width: 97%; font-size: 14pt; border: 2px solid #003193; top: 140px; padding: 3px; min-height: 300px; max-height: 350px; height: auto; overflow-y: auto;'>
                     <p><b>Nome: </b>".$_POST['nome']."</p>" 
                    ."<p><b>Email: </b>".$_POST['email']."</p>"
                    ."<p><b>Telefone: </b>".$_POST['telefone']. "&nbsp;&nbsp;&nbsp;&nbsp;<b>Celular: </b>".$_POST['celular']."</p>"
                    ."<p><b>Rua: </b>".$_POST['rua']."</p>"
                    ."<p><b>Bairro: </b>".$_POST['bairro']."&nbsp;&nbsp;&nbsp;&nbsp;<b>Número: </b>".$_POST['numero']."</p>"
                    ."<p><b>Complemento: </b>".$_POST['complemento']."</p>
                    </div></br>
                    <div style='display: block; position: relative; text-align: left; font-size: 12pt; top: 175px;'>
                        <a href='10.100.10.88:8080/siteConnect'>clique aqui para ser redirecionado ao site</a>  
                    </div>
                </div>
            </body>"; 

sendMail('Solicitação de orçamento',$mensagem2,'contato@connectja.com.br','Connect - Internet Banda Larga', NULL, NULL, NULL,'../Images/logoEmail.gif');
?>
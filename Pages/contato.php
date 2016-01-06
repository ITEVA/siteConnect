<link rel="stylesheet" href="Css/contato.css">

<img id="imagemContato" src="Images/imagemContato.png">

<div class="col-lg-12">
    <p id="text1">Início/Contato</p>
    <div id="boxContato">
        <p id="text2">FALE COM A CONNECT</p>
        <p id="text3">Utilize este canal para pedir informações, esclarecer dúvidas, dar sugestões e fazer solicitacões de atendimento.<br>
                      informe seu e-mail: ele será nosso meio de contato com você.
        </p>
        <form method="post">
            <div class="container-fluid col-md-6">
                <div class="form-group">
                    <label class="control-label">*Nome</label>
                    <input class="form-control" type="text" placeholder="Nome" name="nome" required="required"/>
                </div>

                <div class="form-group">
                    <label class="control-label">*E-mail</label>
                    <input class="form-control" type="email" placeholder="example@email.com" name="email" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">*Mensagem</label>
                    <textarea class="form-control" rows="7" type="text" placeholder="Mensagem" name="mensagem" required="required"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-default" type="submit" text="Enviar" name="enviar" value="Enviar"/>
                </div>
                <?php
                    if(isset($_POST['enviar']) && $_POST['enviar'] == 'enviar'){
                        require_once 'emailContato.php';
                    }
                ?>
            </div>
        </form>
    </div>
</div>

<img id="bg-baixoContato" src="Images/bg-baixoContato.png">
<img id="tablet" src="Images/tablet.png">

<div class="col-lg-3 endereco">
    <div id="localizacao">
        <p id="capital">FORTALEZA</p>
        <div class="box">
            <p class="topico">Rua:&nbsp;</p><p class="dado">Dr. Thompson Bulcão, 11 | Loja 2</p>
        </div>
        <div class="box">
            <div id="cepEbairro">
            <p class="topico">CEP:&nbsp;</p><p class="dado">60.810-460</p>&nbsp;&nbsp;&nbsp;&nbsp;
            <p class="topico">Bairro:&nbsp;</p><p class="dado">Luciano Calvacante</p>
            </div>
        </div>
        <div class="box">
            <p class="topico">Telefones:&nbsp;</p><p class="dado">(85) 98579-7646 - OI <br/> (85) 99948-5004 - TIM <br/> (85) 98209-5005 - VIVO</p>
        </div>
    </div>
</div>

<div id="atendimento1">
    <img id="iconContato" src="Images/iconContato.png">
</div>

<div id="atendimento2">
    <p id="centAtend">CENTRAL DE ATENDIMENTO</p>
    <p id="fone">(85) 3031-5000</p>
</div>

<img id="bg-bc" src="Images/bg-pgContato.png">

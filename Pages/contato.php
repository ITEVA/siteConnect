
<link rel="stylesheet" href="Css/contato.css">

<img id="imagemContato" src="Images/imagemContato.png">
<img id="imagemContato2" src="Images/imagemContato2.png">
<div class="contato">
    <div class="col-lg-12 formulario">
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
</div>
<div class="boxTudo">
    <img id="bg-baixoContato" src="Images/bg-baixoContato.png">
    <img id="retangulo" style="" src="Images/retangulo.png">
    <img id="retangulo2" src="Images/retangulo2.png">
    <a href="www.google.com" <abbr title="Clique e veja no mapa"> <img id="tablet" src="Images/tablet.png" title="Clique e veja no mapa."></abbr></a>
    <img id="tablet2" src="Images/tablet2.png">
    <div id="atendimentos">
        <div id="atendimento1">
            <img id="iconContato" src="Images/iconContato.png">
        </div>
        <div id="atendimento2">
            <p id="centAtend">CENTRAL DE ATENDIMENTO</p>
            <p id="fone">(85) 3031-5000</p>
        </div>

    </div>

</div>

<img id="bg-bc" src="Images/bg-pgContato.png">

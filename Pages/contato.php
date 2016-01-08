<link rel="stylesheet" href="Css/contato.css">

<img id="imagemContato" src="Images/imagemContato.png">
<img id="imagemContato2" src="Images/imagemContato2.png">
<div class="contato">
    <div class="col-lg-12 formulario">
        <p id="text1"><?php echo utf8_encode("Início")?>/Contato</p>
        <div id="boxContato">
            <p id="text2">FALE COM A CONNECT</p>
            <p id="text3">Utilize este canal para pedir <?php echo utf8_encode("informações")?>, esclarecer <?php echo utf8_encode("dúvidas")?>, dar <?php echo utf8_encode("sugestões")?> e fazer <?php echo utf8_encode("solicitaões")?> de atendimento.<br>
                          informe seu e-mail: ele <?php echo utf8_encode("será")?> nosso meio de contato com <?php echo utf8_encode("você")?>.
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
                        if(isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar'){
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
    <div id="mapa">
        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1895789347805!2d-38.49669628462421!3d-3.7688868444365724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c748b364103923%3A0x84a1e567b49a3060!2sRua+Dr.+Thompson+Bulc%C3%A3o+-+Eng.+Luciano+Cavalcante%2C+Fortaleza+-+CE%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1452252737401" width="600" height="450" frameborder="0" allowfullscreen></iframe>
    </div>
    <a href="mapa.php" <abbr title="Clique e veja no mapa"> <img id="tabletsm" src="Images/tablet.png" title="Clique e veja no mapa."></abbr></a>
    <img id="tablet" src="Images/tabletSm.png">
    <a href="mapa"> <abbr title="Clique e veja no mapa"> <img id="tablet2" src="Images/tablet2.png" title="Clique e veja no mapa."></abbr></a>
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

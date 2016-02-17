<link rel="stylesheet" href="Css/contato.css">

<img id="imagemContato" src="Images/imagemContato.jpg">
<img id="imagemContato2" src="Images/imagemContato2.jpg">
<div class="contato">
    <div class="col-lg-12 formulario">
        <p id="text1"><a href="home" class="link_a">Início</a> / Contato</p>
        <div id="boxContato">
            <p id="text2">FALE COM A CONNECT</p>
            <p id="text3">Utilize este canal para pedir informações, esclarecer dúvidas, dar sugestões e fazer solicitações de atendimento.<br>
                          Informe seu e-mail: ele será nosso meio de contato com você.
            </p>
            
            <form id="formContato" method="post">
                <div class="container-fluid col-md-6">
                    
                    <div class="alert alert-success alert-dismissible" id="emailSucesso" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Email enviado com sucesso!</strong>
                    </div>
                    <!--<div id="divEmailSucesso" class="container-fluid col-lg-12 form-group"><label id="lbEmailSucesso" class="control-label"></label></div>-->
                    <div class="form-group">
                        <label class="control-label">*Nome</label>
                        <input class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required="required"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">*E-mail</label>
                        <input class="form-control" type="email" placeholder="example@email.com" id="email" name="email" required="required"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">*Mensagem</label>
                        <textarea class="form-control" rows="7" type="text" placeholder="Mensagem" id="mensagem" name="mensagem" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input class="btn btn-default" id="envio" type="submit" text="Enviar" name="enviar" value="Enviar"/>
                    </div>
                    
                </div>
                
            </form>

            
        </div>
    </div>
</div>
<div class="boxTudo">
    <img id="bg-baixoContato" src="Images/bg-baixoContato.jpg">
    <img id="retangulo" style="" src="Images/retangulo.png">
    <img id="retangulo2" src="Images/retangulo2.png">
    <div id="mapa">
        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1895789347805!2d-38.49669628462421!3d-3.7688868444365724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c748b364103923%3A0x84a1e567b49a3060!2sRua+Dr.+Thompson+Bulc%C3%A3o+-+Eng.+Luciano+Cavalcante%2C+Fortaleza+-+CE%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1452252737401" width="600" height="450" frameborder="0" allowfullscreen></iframe>
    </div>
    <a href="mapa.php" <abbr title="Clique e veja no mapa"> <img id="tabletsm" src="Images/tablet.png" title="Clique e veja no mapa."></abbr></a>
    <img id="tablet" src="Images/tabletSm.png">
    <a href="mapa"> <abbr title="Clique e veja no mapa"> <img id="tablet2" src="Images/tablet2.png" title="Clique e veja no mapa."></abbr></a>
    <a href="mapa"> <abbr title="Clique e veja no mapa"><img id="cliqueAqui" src="Images/cliqueAqui.png"></abbr></a>
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

<img id="bg-bc" src="Images/bg-pgContato.jpg">

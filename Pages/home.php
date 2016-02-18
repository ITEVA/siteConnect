<script>
	jQuery(document).ready(function($){
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},800);
		});
	});
</script>

<!--Conteúdo-->
<div class="box">
    <span class="pager"></span>
    
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel1" data-slide-to="1"></li>
          <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active"><a href="assinaturas"><img src="Images/img-slide1.jpg" id="img_full" alt="First slide image" class="center-block">
            <img src="Images/img-slide11.jpg" id="img_movel" alt="First slide image" class="center-block"></a>
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item"><a href="#muitoPVc" class="scroll"><img src="Images/img-slide2.jpg" id="img_full" alt="Second slide image" class="center-block">
            <img src="Images/img-slide22.jpg" id="img_movel" alt="First slide image" class="center-block"></a>
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item"><a href="#podLheAjud" class="scroll"><img src="Images/img-slide3.jpg" id="img_full" alt="Third slide image" class="center-block">
            <img src="Images/img-slide33.jpg" id="img_movel" alt="Third slide image" class="center-block"></a>
          </div>
      </div>
    </div>
</div>      
    
<div id="amarela">
    <!--Amarela TRSP - FULL SCREEN-->
    <div id="amarela-trsp">
        <div id="Cl1_amarela-trsp">
            <a href="http://177.19.248.64:8195/sac/open.do?action=open&sys=SAC" id="link-item_amarela-trsp1" class="link-item_amarela-trsp_up" >
                <div class="item_amarela-trsp">
                    <img src="Images/icon-checked.png" class="icon_trsp"/>
                    <h1 class="titulo_link-item_amarela-trsp">QUERO<br/>ASSINAR JÁ!</h1>
                    <p class="conteudo_link-item_amarela-trsp">Preencha o formulário e<br/>entraremos em contato<br/>em menos de 24 horas.</p>
                </div>
            </a>
            <a href="assinaturas" id="link-item_amarela-trsp2" class="link-item_amarela-trsp_down">
                <div class="item_amarela-trsp">
                    <img src="Images/icon-present.png" class="icon_trsp"/>
                    <h1 class="titulo_link-item_amarela-trsp">OS MELHORES<br/>PLANOS PARA VOCÊ</h1>
                    <p class="conteudo_link-item_amarela-trsp">Temos planos e preços<br/>que cabem no seu bolso.<br>É só escolher e assinar.</p>
                </div>
            </a>
        </div>
        
        <div id="separador">
            <img class="imgSeparador" src="Images/LinhaSeparadora.png" width="100%"
                height="100%"/>
        </div>
        <div id="Cl2_amarela-trsp">
            <a href="cobertura" id="link-item_amarela-trsp3" class="link-item_amarela-trsp_up">
                <div class="item_amarela-trsp">
                    <img src="Images/icon-local.png" class="icon_trsp"/>
                    <h1 class="titulo_link-item_amarela-trsp">NOSSA<br/>COBERTURA</h1>
                    <p class="conteudo_link-item_amarela-trsp">Descubra onde encontrar<br/>internet de qualidade.<br/>Veja onde atendemos.</p>
                </div>
            </a>
            <a href="contato" id="link-item_amarela-trsp4" class="link-item_amarela-trsp_down">
                <div class="item_amarela-trsp">
                    <img src="Images/icon-talk.png" class="icon_trsp"/>
                    <h1 class="titulo_link-item_amarela-trsp">FALE COM<br/>A GENTE!</h1>
                    <p class="conteudo_link-item_amarela-trsp">Informe-se, esclareça suas dúvidas, dê sugestões e <br/>contrate nossos serviços.</p>
                </div>
            </a>
        </div>
    </div>
    
    <!--Amarela TRSP - MOVEL SCREEN-->
    <div id="amarela-trsp-movel">
        <div id="Cl1_amarela-trsp">
            <a href="http://177.19.248.64:8195/sac/open.do?action=open&sys=SAC" id="link-item_amarela-trsp1" class="link-item_amarela-trsp_up">
                <div class="item_amarela-trsp-movel">
                    <img src="Images/icon-checked-movel.png" class="icon_trsp-movel"/>
                    <h1 class="titulo_link-item_amarela-trsp">QUERO<br/>ASSINAR JÁ!</h1>
                </div>
            </a>
            <a href="assinaturas" id="link-item_amarela-trsp2" class="link-item_amarela-trsp_down">
                <div class="item_amarela-trsp-movel">
                    <img src="Images/icon-present-movel.png" class="icon_trs-movel"/>
                    <h1 class="titulo_link-item_amarela-trsp">OS MELHORES<br/>PLANOS</h1>
                </div>
            </a>
        </div>
        
		<div id="separador">
            <img class="imgSeparador" src="Images/LinhaSeparadora.png" width="100%"
                height="100%"/>
        </div>

        <div id="Cl2_amarela-trsp-movel">
            <a href="corbetura" id="link-item_amarela-trsp3" class="link-item_amarela-trsp_up">
                <div class="item_amarela-trsp-movel">
                    <img src="Images/icon-local-movel.png" class="icon_trsp-movel"/>
                    <h1 class="titulo_link-item_amarela-trsp">NOSSA<br/>COBERTURA</h1>
                </div>
            </a>
            <a href="contato" id="link-item_amarela-trsp4" class="link-item_amarela-trsp_down">
                <div class="item_amarela-trsp-movel">
                    <img src="Images/icon-talk-movel.png" class="icon_trsp-movel"/>
                    <h1 class="titulo_link-item_amarela-trsp">FALE CONOSCO</h1>
                </div>
            </a>
        </div>
    </div>
    
    <!--Amarela TRSP - SUPER MOVEL SCREEN SCREEN-->
    <div id="amarela-trsp-super-movel">
        <div id="Cl1_amarela-trsp">
            <a href="http://177.19.248.64:8195/sac/open.do?action=open&sys=SAC" id="link-item_amarela-trsp1" class="link-item_amarela-trsp_up">
                <div class="item_amarela-trsp-super-movel">
                    <img src="Images/icon-checked-super-movel.png" class="icon_trsp-super-movel"/>
                    <h1 class="titulo_link-item_amarela-trsp">QUERO<br/>ASSINAR JÁ!</h1>
                </div>
            </a>
            <a href="assinaturas" id="link-item_amarela-trsp2" class="link-item_amarela-trsp_down">
                <div class="item_amarela-trsp-super-movel">
                    <img src="Images/icon-present-super-movel.png" class="icon_trs-super-movel"/>
                    <h1 class="titulo_link-item_amarela-trsp">OS MELHORES<br/>PLANOS</h1>
                </div>
            </a>
        </div>
        
        <div id="Cl2_amarela-trsp-super-movel">
            <a href="corbetura" id="link-item_amarela-trsp3" class="link-item_amarela-trsp_up">
                <div class="item_amarela-trsp-movel">
                    <img src="Images/icon-local-super-movel.png" class="icon_trsp-super-movel"/>
                    <h1 class="titulo_link-item_amarela-trsp">NOSSA<br/>COBERTURA</h1>
                </div>
            </a>
            <a href="contato" id="link-item_amarela-trsp4" class="link-item_amarela-trsp_down">
                <div class="item_amarela-trsp-super-movel">
                    <img src="Images/icon-talk-super-movel.png" class="icon_trsp-super-movel"/>
                    <h1 class="titulo_link-item_amarela-trsp">FALE CONOSCO</h1>
                </div>
            </a>
        </div>
    </div>

    <div class="acessoRapido">
        <img src="Images/acesso_rapido.png" id="imgAcessoRapido">
        <img src="Images/acesso_rapido-super-movel.png" id="imgAcessoRapido-super-movel">
        <div class="botoes">
            <div id="coluna1">
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/1.png"/>
                    <h3 id="txt1"><span>Gráfico<br/>Diário</span></h3>
                </a>
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/2.png"/>
                    <h3 id="txt2"><span>Gráfico</span><br/>de Consumo</h3>
                </a>
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/3.png"/>
                    <h3 id="txt3"><span>Alterar</span><br/>Senha</h3>
                </a>
            </div>

            <div id="coluna2">
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/4.png"/>
                    <h3 id="txt4"><span>Alterar<br/>Cadastral</span></h3>
                </a>
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/5.png"/>
                    <h3 id="txt5"><span>Contrato</span></h3>
                </a>
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/6.png"/>
                    <h3 id="txt6">Segunda Via<br/><span>Boleto</span></h3>
                </a>
            </div>
            
            <div id="coluna3">
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/7.png"/>
                    <h3 id="txt7"><span>Pagamentos</span></h3>
                </a>
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/8.png"/>
                    <h3 id="txt8"><span>Auto-<br>Desbloqueio</span></h3>
                </a>
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/icons/9.png"/>
                    <h3 id="txt9"><span>Cartilha de<br/>Segurança</span></h3>
                </a>
            </div>
            
        </div>
    </div>

    <div class="acessoRapido-super-movel">
        <img src="Images/acesso_rapido-super-movel.png" id="imgAcessoRapido-super-movel">
        <div class="botoes">
            <div id="coluna1">
                <a href="http://connectja.com.br/sac" target="_blank" class="botao">
                    <img class="botoes_icon" src="Images/user-super-movel.png"/>
                    <h3 id="txt1"><span>Área do</span><br/>Usuário</h3>
                </a>
            </div>
        </div>
    </div>
    
</div>

<div id="muitoPVc">
    <h1 id="h1MuitoPVc">MUITO MAIS PARA VOCÊ!</h1>
    <div id="opcoes_muitoPVc">
        <div id="tv">
            <img src="Images/image-TV.png">
            <h1>Smart tv's</h1>
            <p>O melhor do entretenimento<br/>com a qualidade da Connect.</p>
        </div>
        <div id="game">
            <img src="Images/image-game.png">
            <h1>Jogos online</h1>
            <p>Divirta-se em alta velocidade com os<br/>jogos online mais acessados da web.</p>
        </div>
        <div id="dispositivos">
            <img src="Images/image-dispositivos.png"/>
            <h1>Mobile</h1>
            <p>Aproveite todo o potencial dos<br>seus Gadgets com a internet<br>de qualidade da Connect.</p>
        </div>
        <div id="musicas">
            <img src="Images/image-music.png">
            <h1>Músicas</h1>
            <p>Spolify, Deezer, Rdio e muitos<br>outros serviços streaming musicais,<br>são possíveis e seguros<br>com a Connect.</p>
        </div>
    </div>
</div>

<div id="podLheAjud">
    <div id="podLheAjud">
        <h1 id="h1podLheAjud">PODEMOS LHE AJUDAR?</h1>
        <figure id="image_duvidas">
            <img src="Images/image-duvidas.jpg" id="image_duvidas1">
            <a href="http://www.speedtest.net/pt/">
            	<img src="Images/imgTesteVelocidadeInternet.jpg" id="image_duvidas2">
            </a>
        </figure>
    </div>
</div>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento sem título</title>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

<style type="text/css">
/*GERAL*/

body{
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/*IMAGENS*/

img#imagemPrincipal{
    width: 100%;
    margin: 0;
    padding: 0;
}

img.oferta{
    width: 80px;
    height: 80px;
    z-index: 9999;
}

img#divisao{
    position: relative;
    display: block;
    float: none;
    margin: 0 auto;
    width: 36.04%
}

/*DIV'S*/

div.row{
    width:100%;
    padding-top:5px;
    margin-left:-35px;

}

div.preco, .contrate{
    background-color:#bababa;
    float:none;
    height: 35px;
}


div.contrate{
    background-color:#6d6d6d;
    float:none;
    height:35px;
}

div.linha2{
    position: absolute;
    left: 44%;
    width:50%;
    display:inline-flex;
}

div.linha3 {
    position: absolute;
    left: 56%;
    width: 22%;
    display:inline-flex
}

div#textos{
    margin: 2% 30%;
}


div.div2{
    background: #002B6F;
    height: 300px;
    max-width: 100%;
}

div.div3{
    background: #fff;
    height: 100px;
}

div.conteudo{
    display: inline-flex;
    width: 30%;
    margin: 1.3% 32%
}

/*PARÁGRAFOS*/

p.valor, .contratar{
    padding-top: 8px;
    color:#fff;
    margin:0;
    padding-left:20px;
}

p.valor{
    color: #000;
}

p#t1{
    color: #f0ad4e;
}

p#t2{
    font-size: 18px;
    color: #265a88;
    font-weight: bold;
}

/*LINK*/
a.contrato{
    padding-top: 8px;
    color:#fff;
    margin:0;
    padding-right:10px;
    cursor: pointer;
}

a.contrato:hover{
    text-decoration: none;
    color: #fff;
}


div.linha1{
    width:58%;
    display:inline-flex;
    position: absolute;
}

.col-xs-8{
    display: none;
}


/*MEDIA QUERIES*/

@media all and (max-width: 1749px){
    div#textos{
        width: 70%;
    }
}

@media all and (max-width: 1680px){
    div.conteudo{
        margin-top: 25px;
    }
}

@media all and (max-width: 1500px){
    div#textos{
        width: 60%;
        margin: 2% 25%;
    }

    div.linha1{
        left: 26%;
    }

    div.linha2{
        left: 40.5%;
        width: 58%;
    }

    div.linha3{
        left: 55%;
        width: 20%;
    }

    img#divisao{
        width: 45%;
        left: -2%;
    }

    .col-xs-6{
        display: none;
    }

    .col-xs-8{
        display: block;
    }
}

@media all and (max-width: 1300px){
    div#textos{
        margin: 2% 20%;
    }
}

@media all and (max-width: 1250px){
    div.preco, .contrate{
        width: 65%;
    }

    div.linha1{
        left: 20%;
    }

    div.linha2{
        left: 39%;
    }

    div.linha3{
        left: 58%;
    }

    img#divisao{
        width: 58%;
        left: -1%;
    }
}

@media all and (max-width: 1181px){
    div#textos{
        width: 75%;
        margin: 2% 15%;
    }
}

@media all and (max-width: 997px){
    p.valor{
        padding-left: 19px;
    }
}

@media all and (max-width: 989px) {
    p.valor {
        padding-right: 0;
    }

    div.linha1{
        left: 16%;
    }

    div.linha2{
        left: 38%;
    }

    div.linha3{
        left: 60%;
        width: 31%;
    }

    img#divisao{
        width: 67%;
    }

}

@media all and (max-width: 954px){
    div#textos{
        width: 80%;
    }

    div.preco, .contrate{
        width: 68%;
    }

    div.linha1{
        left: 14%;
    }

    div.linha2{
        left: 38%;
    }

    div.linha3{
        left: 62%;
    }

    img#divisao{
        width: 73.5%;
        left: 0%;
    }
}

@media all and (max-width: 898px){
    div#textos{
        width: 70%;
    }
}

@media all and (max-width: 750px){
   div.preco, .contrate{
       width: 78%;
   }

    div.linha1{
        left: 8%;
    }

    div.linha2{
        left: 36%;
    }

    div.linha3{
        left: 64%;
    }

    img#divisao{
        width: 86%;
    }
}

@media all and (max-width: 640px){
    img.oferta{
        width: 60px;
        height: 60px;
    }

    div.preco{
        height: 24px;
    }

    div.contrate{
        height: 24px;
    }

    p.valor, .contratar{
        font-size: 8pt;
    }

    div.linha2{
        left: 35%;
    }

    div.linha3{
        left: 62%;
    }

    img#divisao{
        width: 84%;
        left: -1%;
    }

    div.div2{
        height: 270px;
    }
}

@media all and (max-width: 525px){
    div.preco, .contrate{
        width: 85%;
    }

    div.linha1{
        left: 4%;
    }

    div.linha2{
        left: 34%;
    }

    div.linha3{
        left: 64%;
    }

    img#divisao{
        width: 94%;
    }
}

@media all and (max-width: 450px){
    img.oferta{
        width: 50px;
        height: 50px;
    }

    div.preco{
        height: 20px;
    }

    div.contrate{
        height: 20px;
    }

    p.valor, .contratar{
        font-size: 7pt;
    }

    img#divisao{
        top: -4%;
    }

    div.conteudo2{
        margin-top: -40%;
    }

    div.div2{
        height: 245px;
    }

}




</style>

</head>

<body>

<img id="imagemPrincipal" src="Images/bg-topo-2pagina.png">

<div class="col-lg-12 div1">
    <div id="textos">
        <p id="t1">Início/Internet/Para sua casa</p>
        <p id="t2">INTERNET PARA SUA CASA</p>
        <p>Diversão, informação e entreterimento 24h por dia em alta velocidade! Acesse a internet sem inteferências,<br>
        interrupções e, principalmente, sem perda de tempo. Escolha seu plano e Connect sua casa ao mundo.</p>
    </div>
</div>
<div class="col-lg-12 div2">
    <div class="conteudo">
        <div class="linha1">
            <img class="oferta" src="Images/1mega.png">
                <div class="row">
                    <div class="col-xs-4 preco"><p class="valor">R$ 00,00</p></div>
                    <div class="col-xs-4 contrate"><p class="contratar"><a href="#" class="contrato">CONTRATAR</a></p></div>
                </div>
        </div>

        <div class="linha2">
            <img class="oferta" src="Images/2megas.png">
                <div class="row">
                    <div class="col-xs-4 preco"><p class="valor">R$ 00,00</p></div>
                    <div class="col-xs-4 contrate"><p class="contratar"><a href="#" class="contrato">CONTRATAR</a></p></div>
                 </div>
        </div>

        <div class="linha3">
            <img class="oferta" src="Images/4megas.png">
                <div class="row">
                    <div class="col-xs-6 preco"><p class="valor">R$ 00,00</p></div>
                    <div class="col-xs-6 contrate"><p class="contratar"><a href="#" class="contrato">CONTRATAR</a></p></div>

                    <div class="col-xs-8 preco"><p class="valor">R$ 00,00</p></div>
                    <div class="col-xs-8 contrate"><p class="contratar"><a href="#" class="contrato">CONTRATAR</a></p></div>
                 </div>
        </div>
    </div>

    <br><br><br><br><br><br>

    <img id="divisao" src="images/divisao.png">

    <br>
    <div class="conteudo conteudo2">
        <div class="linha1">
            <img class="oferta" src="Images/8megas.png">
            <div class="row">
                <div class="col-xs-4 preco"><p class="valor">R$ 00,00</p></div>
                <div class="col-xs-4 contrate"><p class="contratar"><a href="#" class="contrato">CONTRATAR</a></p></div>
            </div>
        </div>

        <div class="linha2">
            <img class="oferta" src="Images/10mega.png">
            <div class="row">
                <div class="col-xs-4 preco"><p class="valor">R$ 00,00</p></div>
                <div class="col-xs-4 contrate"><p class="contratar"><a href="#" class="contrato">CONTRATAR</a></p></div>
            </div>
        </div>

        <div class="linha3">
            <img class="oferta" src="Images/20megas.png">
            <div class="row">
                <div class="col-xs-6 preco"><p class="valor">R$ 00,00</p></div>
                <div class="col-xs-6 contrate"><p class="contratar"><a href="#" class="contrato">CONTRATAR</a></p></div>

                <div class="col-xs-8 preco"><p class="valor">R$ 00,00</p></div>
                <div class="col-xs-8 contrate"><p class="contratar"><a href="#" class="contrato">CONTRATAR</a></p></div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 div3"></div>

<img src="Images/bg-baixo.png">



</body>
</html>

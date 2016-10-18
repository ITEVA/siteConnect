<style>
    div.bloco_erro{
        position: relative;
        width: 76%;
        height: 100%;
        margin: 50px auto;
    }
    img.img_erro{
        max-width: 100%;   /* Máximo da largura da imagem */
        width: 80%;
        margin-left:10%;
        min-height: auto;      /* Mínimo da altura, por padrão “auto” */
        background-repeat: no-repeat;
        position: relative;
    }
    #ops2 {
        display: none;
    }

    @media all and (max-width: 767px) {
        #ops1 {
            display: none;
        }
        #ops2 {
            display: block;
        }
    }
</style>
<div id="ops1" class="bloco_erro">
    <img src="Images/opps.jpg" alt="" class="img_erro"/>
</div>
<div id="ops2" class="bloco_erro">
    <img src="Images/opps2.jpg" alt="" class="img_erro"/>
</div>

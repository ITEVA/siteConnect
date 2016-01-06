<link rel="stylesheet" href="Css/contato.css">

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
            <input class="btn btn-default" type="submit" text="Enviar" name="enviar" value="enviar"/>
        </div>
        <?php
            if(isset($_POST['enviar']) && $_POST['enviar'] == 'enviar'){
                require_once 'emailContato.php';
            }
        ?>
    </div>
    
    <div class="container col-md-6">
    </div>
</form>

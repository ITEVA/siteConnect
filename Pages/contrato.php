<script src="JS/jquery.maskedinput.js" type="text/javascript"></script>
<div id="formContrato">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Forneça seus dados para receber um orçamento</h4>
            <h6>Um e-mail será enviado em menos de um minuto!</h6>
        </div>

        <div class="panel-body">
            <form id="formContrato" method="post">
                <div class="alert alert-success alert-dismissible" id="emailSucesso" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>E-mail enviado com sucesso!</strong>
                </div>
                <ul class="row">
                        <li class="col-xs-6">
                            <input class="form-control" id="nome" onkeypress="return letras()" type="text" placeholder="Nome Completo" name="nome" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="email" type="email" placeholder="E-mail" name="email" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="celular" type="tel" placeholder="Celular" name="celular" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="telefone"  type="tel" placeholder="Telefone" name="telefone"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="rua" type="text" onkeypress="return letras()" placeholder="Rua" name="rua" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <select required id="sel1" class="form-control" name="bairro">
                                <option value="">Selecione seu bairro</option>
                                <option id="lc" value="Luciano Cavalcante">Luciano Cavalcante</option>
                                <option value="Jardim das Oliveiras">Jardim das Oliveiras</option>
                                <option value="Tasso Jereissate">Tasso Jereissate</option>
                                <option value="Tancredo Neves">Tancredo Neves</option>
                                <option value="Salinas">Salinas</option>
                                <option value="Boa Vista">Boa Vista</option>
                                <option value="Dias Macedo">Dias Macedo</option>
                                <option value="Alto da Balança">Alto da Balança</option>
                                <option value="Aerolândia">Aerolândia</option>
                                <option value="São João do Tauape">São João do Tauape</option>
                                <option value="Guararapes">Guararapes</option>
                            </select>
                        </li>

                        <li class="col-xs-6">
                                <input class="form-control numero" onkeypress="return numeros()" id="numero" type="text" placeholder="Número" name="numero" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control complemento" type="text" placeholder="Complemento" id="complemento" name="complemento"/>
                        </li>

                </ul>
                <div class="pull-right">
                    <input type="submit"  class="botao" id="enviar" value="Enviar" name="enviar"/>
                    <input type="reset"  class="botao" id="limpar" value="Limpar"/>
                </div>

            </form>
        </div>
    </div>
</div>


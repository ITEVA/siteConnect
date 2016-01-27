<script src="JS/jquery.maskedinput.js" type="text/javascript"></script>
<script src="JS/contrato.js" type="text/javascript"></script>
<div id="formContrato">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Forneça seus dados para assinar</h4>
        </div>

        <div class="panel-body">
            <form id="formContrato" method="post">
                <ul class="row">
                        <li class="col-xs-6">
                            <input class="form-control" id="nome" onkeypress="return letras()" type="text" placeholder="Nome Completo" name="nome" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" type="email" placeholder="E-mail" name="email" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="celular" type="tel" placeholder="Celular" name="celular" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="telefone"  type="tel" placeholder="Telefone" name="telefone"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" type="text" onkeypress="return letras()" placeholder="Rua" name="rua" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <select required id="sel1" class="form-control">
                                <option value="">None</option>
                                <option id="lc" value="Luciano_Cavalcante">Luciano Cavalcante</option>
                                <option value="Jardim_Das_Oliveiras">Jardim das Oliveiras</option>
                                <option value="Tasso_Jereissate">Tasso Jereissate</option>
                                <option value="Tancredo_Neves">Tancredo Neves</option>
                                <option value="Salinas">Salinas</option>
                                <option value="Boa_Vista">Boa Vista</option>
                                <option value="Dias_Macedo">Dias Macedo</option>
                                <option value="Alto_Da_Balanca">Alto da Balança</option>
                                <option value="Aerolandia">Aerolândia</option>
                                <option value="Sao_Joao_Do_Tauape">São João do Tauape</option>
                                <option value="Guararapes">Guararapes</option>
                            </select>
                        </li>

                        <li class="col-xs-6">
                                <input class="form-control numero" onkeypress="return numeros()" id="numero" type="text" placeholder="Número" name="numero" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control complemento" type="text" placeholder="Complemento" name="complemento"/>
                        </li>

                </ul>
                <div class="pull-right">
                    <input type="submit"  class="botao" value="Enviar"/>
                    <input type="reset"  class="botao" value="Limpar"/>
                </div>

            </form>
        </div>
    </div>
</div>


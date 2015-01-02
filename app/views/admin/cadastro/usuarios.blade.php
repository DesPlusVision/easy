{{ HTML::style('css/padraoAdmin.css') }}   
{{ HTML::script('js/maked.js') }}
{{ HTML::script('js/funcoes.js') }}

<div id="pagesPadrao">
    <input type="button" data-element="#nova" id="btCadastrar" name="novo" value="Cadastrar Usuario" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false" style="margin: 10px 0px;">

    <!-- FILTROS EM CASO DE QUEREREM SO FAZER O METODO QUE IRAR LISTAR
    <input type="button" data-element="#filtros" id="btMostrarFiltros" name="filtros" value="Mostrar filtros..." class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false" style="margin: 10px 0px;">

    <div id="filtros" style="display: none; height: auto;">
        <form name="formularioPesquisa" id="formularioPesquisa" method="POST" >
            <div style="float: left;">
                <fieldset class="ui-corner-all"><legend>Filtros de pesquisa:</legend>
                    <br/>
                    <div id="coluna">
                        <div><label for="status">Empresa:</label></div>
                        <input type="text" name="nm_empresa" class="ui-widget input">
                    </div>
                    <div id="coluna">
                        <div><label for="status">Status:</label></div>
                        <select name="status" id="status" class="ui-widget input" style="width: 60%">
                            <option value="" seletected="">Todos os status</option>
                            <option value="1" seletected="">ATIVO</option>
                            <option value="2" seletected="">INATIVO</option>
                        </select>
                    </div>
                    <div id="coluna">
                        <div><label for="dtInicio">Período:</label></div>
                        <input type="text" name="dataInicio" id="dataInicio"  maxlength="10" size="10" class="ui-widget input" style="width: 120px;"/> 
                        <input type="text" name="dataFim" id="dataFim"  maxlength="10" size="10" class="ui-widget input" style="width: 120px;"/>
                    </div>
                    <br>
                    <input type="submit" id="btPesquisar" name="btPesquisar" value="Pesquisar" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false" style="margin: 10px 0px;"> 
                    <input style="margin: 10px 0;" type="reset" name="btLimpar" value="Limpar" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false">

                </fieldset>
            </div>
        </form>
    </div><!-- filtros -->

    <div id="listagem" style="border: 1px solid #999999;">
        <table width="100%">
            <tr style="background: #000; color: #FFF; text-align: center;">
                <td width="2%">#</td>
                <td width="40%">Usuario</td>
                <td width="50%">Empresa</td>
                <td width="18%">Ações</td>
            </tr>
        </table>
        <div style="height: 400px; overflow: auto;">
            <table width="100%">
                @foreach ($usuarios as $usuario)
                <tr id="houver" style="text-align: center;">
                    <td width="2%">{{$usuario->id}}</td>
                    <td width="40%">{{$usuario->nm_usuario}}</td>
                    <td width="50%">{{$usuario->nm_empresa}}</td>
                    <td width="18%">
                        <a href="usuarios/consultar/{{$usuario->id}}" target="_black" title="Consultar">{{ HTML::image('img/consultar.png')}}</a>
                        <a href="usuarios/alterar/{{$usuario->id}}" title="Alterar">{{ HTML::image('img/ico_alterar.png')}}</a>
                        <?php if ($usuario->idStatus == 2) { ?>
                            <a href="usuarios/ativar?id={{$usuario->id}}" title="Ativar">{{ HTML::image('img/ativar.png')}}</a>
                        <?php } else { ?>
                            <a href="usuarios/inativar?id={{$usuario->id}}" title="Inativar">{{ HTML::image('img/inativar.png')}}</a>
                        <?php } ?>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div> <!-- listagem -->

    <div id="nova" style="display: none;">
        {{Form::open(array('action' => 'UsuarioController@create'))}}
        <fieldset class="ui-corner-all"><legend>Cadastro de Usuário:</legend>
            <div id="posicao" style="margin-left: 10px;">
                <div id="coluna" style="margin-top: 5px;">
                    <div><label for="nm_usuario">Nome:</label></div>
                    <input type="text" name="nm_usuario" class="ui-widget input inputsGrandes" required>
                    <div><label for="matricula">Matricula:</label></div>
                    <input type="text" name="matricula" class="ui-widget input">
                    <table>
                        <tr>
                            <td><label for="login">Login:</label></td>
                            <td><label for="senha">Senha:</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="login" class="ui-widget input"></td>
                            <td><input type="password" name="senha" class="ui-widget input"></td>
                        </tr>
                        <tr>
                            <td><label for="idEmpresa">Empresa:</label></td>
                            <td><label for="idAcesso">Acesso:</label></td>
                            <td><label for="Status">Status:</label></td>
                        </tr>
                        <tr>
                            <td>{{Form::select('idEmpresa', $idEmpresa, Input::old('idEmpresa'), array('class' => 'ui-widget input'))}}</td>
                            <td>{{Form::select('idAcesso', $idAcesso, Input::old('idAcesso'), array('class' => 'ui-widget input'))}}</td>
                            <td>&nbsp;&nbsp;<input type="radio" name="status" checked>Ativo&nbsp;&nbsp;<input type="radio" name="status">Inativo</td>
                        </tr>
                    </table>
                </div>

                <div id="coluna" style="margin-bottom: 5px; margin-top: 5px;margin-right: 50px; text-align: right;">
                    <input type="submit" name="gravar" value="Salvar" class="ui-button ui-widget ui-state-default ui-corner-all">
                    <input type="reset" name="limpar" value="Limpar" class="ui-button ui-widget ui-state-default ui-corner-all">
                </div>
            </div><!-- posicao -->
        </fieldset>
        {{Form::close(); }}
    </div>
</div><!-- pageEmpresa -->



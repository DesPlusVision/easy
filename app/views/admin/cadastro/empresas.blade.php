{{ HTML::style('css/padraoAdmin.css') }}   
{{ HTML::script('js/maked.js') }}
{{ HTML::script('js/funcoes.js') }}

<div id="pagesPadrao">
    <input type="button" data-element="#novaEmpresa" id="btCadastrar" name="novo" value="Cadastrar Empresa" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false" style="margin: 10px 0px;">

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
                <td width="60%">Empresa</td>
                <td width="20%">Pagamento</td>
                <td width="18%">Ações</td>
            </tr>
        </table>
        <div style="height: 400px; overflow: auto;">
            <table width="100%">
                @foreach ($empresas as $empresa)
                <tr id="houver" style="text-align: center;">
                    <td width="2%">{{$empresa->id}}</td>
                    <td width="60%">{{$empresa->nm_empresa}}</td>
                    <td width="20%">
                        <?php if ($empresa->dataPagamento < 10) { ?>0<?php } ?>{{$empresa->dataPagamento}}
                    </td>
                    <td width="18%">
                        <a href="empresas/consultar/{{$empresa->id}}" target="_black" title="Consultar">{{ HTML::image('img/consultar.png')}}</a>
                        <a href="empresas/alterar/{{$empresa->id}}" title="Alterar">{{ HTML::image('img/ico_alterar.png')}}</a>
                        <?php if ($empresa->idStatus == 2) { ?>
                            <a href="empresas/ativar?id={{$empresa->id}}" title="Ativar">{{ HTML::image('img/ativar.png')}}</a>
                        <?php } else { ?>
                            <a href="empresas/inativar?id={{$empresa->id}}" title="Inativar">{{ HTML::image('img/inativar.png')}}</a>
                        <?php } ?>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div> <!-- listagem -->

    <div id="novaEmpresa" style="display: none;">
        {{Form::open(array('action' => 'EmpresaController@create'))}}
        <fieldset class="ui-corner-all"><legend>Cadastro de Empresa:</legend>
            <div id="posicao" style="margin-left: 10px;">
                <div id="coluna" style="margin-top: 5px;">
                    <div><label for="nm_empresa">Razão Social:</label></div>
                    <input type="text" name="nm_empresa" class="ui-widget input inputsGrandes" required>
                    <div><label for="cnpj">CNPJ:</label></div>
                    <input type="text" name="cnpj" id="cnpj" class="ui-widget input">
                    <div><label for="endereco">Endereço:</label></div>
                    <input type="text" name="endereco" class="ui-widget input inputsGrandes">
                    <table>
                        <tr>
                            <td><label for="bairro">Bairro:</label></td>
                            <td><label for="cidade">Cidade:</label></td>
                            <td><label for="estado">Estado:</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="bairro" class="ui-widget input"></td>
                            <td><input type="text" name="cidade" class="ui-widget input"></td>
                            <td>
                                {{ Form::select('idEstado', $estado, 
                                            Input::old('idEstado'), array('class' => 'ui-widget input'))
                                }}
                            </td>
                        </tr>
                        <tr>
                            <td><label for="contato">Contato:</label></td>
                            <td><label for="fone">Fone:</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="contato" class="ui-widget input"></td>
                            <td><input type="text" name="fone" class="ui-widget input"></td>
                        </tr>
                        <tr>
                            <td><label for="endereco">Data de Pagamento:</label></td>
                            <td><label for="Status">Status:</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="dataPagamento" id="dataPagamento" class="ui-widget input"  onblur="valorMaior(this.value)"></td>
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



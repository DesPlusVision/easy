{{ HTML::style('css/padraoAdmin.css') }}

<div id="pageEmpresa" style="margin-top: 80px;">

    <div id="novaEmpresa">
        {{Form::open(array('action' => 'EmpresaController@update'))}}
        <fieldset class="ui-corner-all"><legend>Atualizar Empresa:</legend>
            <div id="posicao" style="margin-left: 10px;">
                <div id="coluna" style="margin-top: 5px;">
                    <div><label for="nm_empresa">Razão Social:</label></div>
                    <input type="text" name="nm_empresa" class="ui-widget input inputsGrandes" required value="{{$empresa->nm_empresa}}">
                    <div><label for="cnpj">CNPJ:</label></div>
                    <input type="text" name="cnpj" id="cnpj" class="ui-widget input" value="{{$empresa->cnpj}}">
                    <div><label for="endereco">Endereço:</label></div>
                    <input type="text" name="endereco" class="ui-widget input inputsGrandes" value="{{$empresa->endereco}}">
                    <table>
                        <tr>
                            <td><label for="bairro">Bairro:</label></td>
                            <td><label for="cidade">Cidade:</label></td>
                            <td><label for="estado">Estado:</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="bairro" class="ui-widget input" value="{{$empresa->bairro}}"></td>
                            <td><input type="text" name="cidade" class="ui-widget input" value="{{$empresa->cidade}}"></td>
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
                            <td><input type="text" name="contato" class="ui-widget input" value="{{$empresa->contato}}"></td>
                            <td><input type="text" name="fone" class="ui-widget input" value="{{$empresa->fone}}"></td>
                        </tr>
                        <tr>
                            <td><label for="endereco">Data de Pagamento:</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="dataPagamento" id="dataPagamento" class="ui-widget input"  onblur="valorMaior(this.value)" value="{{$empresa->dataPagamento}}"></td>
                        </tr>
                    </table>
                </div>

                <div id="coluna" style="margin-bottom: 5px; margin-top: 5px;margin-right: 50px; text-align: right;">
                    <input type="submit" name="gravar" value="Salvar" class="ui-button ui-widget ui-state-default ui-corner-all">
                    <input onclick="location.href='/admin/empresas/'" type="button" name="voltar" value="Voltar" class="ui-button ui-widget ui-state-default ui-corner-all">
                </div>
            </div><!-- posicao -->
        </fieldset>
        <input type="hidden" name="id" class="ui-widget input" value="{{$empresa->id}}">
        {{Form::close(); }}
    </div>
</div>
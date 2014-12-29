<html>
    <head>
        <title>Easy | Empresa: {{$empresa->nm_empresa}}</title>
        {{ HTML::style('css/jquery-ui.css') }}
        <style>
            body {
                font-family: "Arial";
                font-size: 90%;
                font-weight: bold;
                color: #999;
            }
            .espaco{margin-left: 10px; color: #000; font-weight: normal;}
        </style>
    </head>
    <body>

        <div style="text-align: right; font-size: 25px;">
            <a style="color: #00aeef;">Easy</a><a style="color: #a6ce39;"> Manager</a>
        </div>
        <div style="min-width: 100%; border: 1px solid #000;"></div>
        <br/>
        <fieldset class="ui-corner-all"><legend>Dados da Empresa:</legend>
            <div style="text-align: right"><label class="espaco">Cadastro: {{$empresa->created_at}}</label></div>
            <div class="coluna">
                <div><label>Empresa:</label></div>
                <div><label class="espaco">{{$empresa->nm_empresa}}</label></div>
                <div><label>CNPJ:</label></div>
                <div><label class="espaco">{{$empresa->cnpj}}</label></div>
                <div><label>Endereço:</label></div>
                <div><label class="espaco">{{$empresa->endereco}}</label></div>
                <table>
                    <tr>
                        <td><label>Bairro:</label></td>
                        <td><label>Cidade:</label></td>
                        <td><label>Estado:</label></td>
                    </tr>
                    <tr>
                        <td><label class="espaco">{{$empresa->bairro}}</label></td>
                        <td><label class="espaco">{{$empresa->cidade}}</label></td>
                        <td><label class="espaco">{{$estado->estado}}</label></td>
                    </tr>
                    <tr>
                        <td><label>Responsável:</label></td>
                        <td><label>Fone:</label></td>
                    </tr>
                    <tr>
                        <td><label class="espaco">{{$empresa->contato}}</label></td>
                        <td><label class="espaco">{{$empresa->fone}}</label></td>
                    </tr>
                </table>
                <div><label>Data de Pagamento:</label></div>
                <div><label class="espaco">Todo Dia <?php if ($empresa->dataPagamento < 10) { ?>0<?php } ?>{{$empresa->dataPagamento}}</label></div>
            </div>
        </fieldset>
        <div style="text-align: center; color: #000; margin-top: 50px;">
                <div>_____________________________</div>
                <div>Responsável({{$empresa->nm_empresa}})</div>
            </div>
    </body>
</html>




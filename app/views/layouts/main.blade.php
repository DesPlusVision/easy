<!doctype html>
<html lang="pt" >
    <head>
        <link rel="shortcut icon" type="image/ico" href="{{ asset('img/favicon.ico') }}"/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1.0">
        {{ HTML::style('css/padrao.css') }}
        {{ HTML::style('css/jquery-ui.css') }}
        {{ HTML::style('css/default.css') }}
        {{ HTML::style('css/easy-M.css') }}
        {{ HTML::style('css/menuPrincipal.css') }}
        {{ HTML::style('css/header.css') }}
        
        <!-- JQuery UI -->
        {{ HTML::script('js/jquery_ui/jquery-ui.js') }}
        {{ HTML::script('js/jquery_ui/jquery.js') }}
        {{ HTML::script('js/jquery_ui/jquery-ui.min.js') }}
        {{ HTML::script('js/jquery_ui/datepicker_pt-br.js') }}
        
        <title> {{ $titulo }} </title>
    </head>
    <body>
        <div class="page">
            
            <div id="header">
                <div class="logo_header">{{ HTML::image('img/logo_header.png') }}</div>
                <div class="nome_systema">
                    <div>Easy<div style="margin-left: 5px; color: #a6ce39; display: inline-block;">Manager</div></div>
                </div>
            </div>            
            <div class="menuPrincipal">
                <div class="barra"></div>
                <div class="inc_menu">
                    <input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
                    <ul id="css3menu1" class="topmenu">
                        <li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
                        <li class="topfirst"><a href="/admin" style="height:19px;line-height:19px; width: 120px; text-align: center;">{{ HTML::image('img/home.png') }}Início</a></li>
                        <li class="topmenu"><a style="height:19px;line-height:19px; width: 120px; text-align: center;">{{ HTML::image('img/256-1.png') }}Cadastros</span></a>
                            <ul>
                                <li><a href="/admin/listarOcorrencia">{{ HTML::image('img/ocorrencia.png') }}Ocorrências</a></li>
                                <li><a href="/admin/equipamentos">{{ HTML::image('img/samples.png') }}Equipamentos</a></li>
                                <li><a href="/admin/setores">{{ HTML::image('img/setores.png') }}Setores</a></li>
                                <li><a href="/admin/usuarios">{{ HTML::image('img/service.png') }}Usuários</a></li>
                                <li><a href="/admin/empresas">{{ HTML::image('img/mgar.png') }}Empresas</a></li>
                            </ul></li>
                        <li class="topmenu"><a href="#" style="height:19px;line-height:19px; width: 120px; text-align: center;">{{ HTML::image('img/table2.png') }}Tabelas</a></li>
                        <li class="topmenu"><a href="#" style="height:19px;line-height:19px; width: 120px; text-align: center;">{{ HTML::image('img/find.png') }}Relatório</a></li>
                        <li class="topmenu"><a href="" style="height:19px;line-height:19px; width: 120px; text-align: center;">{{ HTML::image('img/bfavour.png') }}Utilitário</a>
                            <ul>
                                <li><a href="/admin/lancarPagamento">{{ HTML::image('img/register.png') }}Lançar Pagamento</a></li>
                                <li><a href="alterarSenha">{{ HTML::image('img/register.png') }}Troca Senha</a></li>
                            </ul>
                        </li>
                        <li class="toplast"><a href="/" style="height:19px;line-height:19px; width: 120px; text-align: center;">{{ HTML::image('img/close_round.png') }}Sair</a></li>
                    </ul>
                    <div style="float: right; font-size: 14px; color: #FFF;">{{Session::get('usuarioLogado')}}</div>
                </div>
                <div class="linha_preta" id="janela"></div>
            </div>
            @include ($pagina)
        </div>
    </body>
</html>


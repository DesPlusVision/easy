<!doctype html>
<html lang="pt" >
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1.0">
        {{ HTML::style('css/padrao.css') }}
        {{ HTML::style('css/jquery-ui.css') }}
        {{ HTML::style('css/default.css') }}
        {{ HTML::style('css/easy-M.css') }}
        {{ HTML::style('css/menuPrincipal.css') }}
        <title> {{ $titulo }} </title>
    </head>
    <body>
        <div class="page">
            <link type="text/css" href="css/header.css" rel="stylesheet">
            <div id="header">
                <div class="logo_header"><img src="img/logo_header.png"></div>
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
                        <li class="topfirst"><a href="" style="height:19px;line-height:19px; width: 120px; text-align: center;"><img src="img/home.png" alt=""/>Início</a></li>
                        <li class="topmenu"><a href="" style="height:19px;line-height:19px; width: 120px; text-align: center;"><img src="img/256-1.png" alt=""/>Cadastros</span></a>
                            <ul>
                                <li><a href=""><span><img src="img/ocorrencia.png" alt=""/>Ocorrências</span></a></li>
                                <li><a href="equipamentos"><img src="img/samples.png" alt=""/>Equipamentos</a></li>
                                <li><a href=""><img src="img/setores.png" alt=""/>Setores</a></li>
                                <li><a href=""><img src="img/service.png" alt=""/>Usuários</a></li>
                                <li><a href=""><img src="img/mgar.png" alt=""/>Empresas</a></li>
                            </ul></li>
                        <li class="topmenu"><a href="#" style="height:19px;line-height:19px; width: 120px; text-align: center;"><img src="img/table2.png" alt=""/>Tabelas</a></li>
                        <li class="topmenu"><a href="#" style="height:19px;line-height:19px; width: 120px; text-align: center;"><img src="img/find.png" alt=""/>Relatório</a></li>
                        <li class="toplast"><a href="#" style="height:19px;line-height:19px; width: 120px; text-align: center;"><img src="img/bfavour.png" alt=""/>Utilitário</a>
                            <ul>
                                <li><a href=""><img src="img/register.png" alt=""/>Troca Senha</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="linha_preta" id="janela">
                    @include ($pagina)
                </div>
            </div>

        </div>
    </body>
</html>


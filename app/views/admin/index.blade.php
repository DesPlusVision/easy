{{ HTML::style('css/padraoAdmin.css') }}
<div id="logs">

    <table width="100%">
        <tr style="background: #000; color: #FFF;">
            <td width="3%">#</td>
            <td width="10%">Data / Hora</td>
            <td width="20%">Usuário</td>
            <td width="67%">Descrição</td>
        </tr>
    </table>
    <div style="height: 400px; overflow: auto;">
        <table width="100%">
            <?php FOR ($i = 1; $i < 50; $i++){  ?>
            <tr id="houver">
                <td width="3%">2</td>
                <td width="10%">26/12/2014 22:11:30</td>
                <td width="20%">Usuário</td>
                <td width="67%">Descrição</td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

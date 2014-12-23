<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Easy Manager</title>
        {{ HTML::style('css/padrao.css') }}
        {{ HTML::style('css/login.css') }}

        <script>
            function habilitar() {
                if (document.getElementById('checkAdmin').checked) {
                    document.getElementById('slcEmpresa').disabled = true;
                } else {
                    document.getElementById('slcEmpresa').disabled = false;
                }
            }
        </script>
    </head>
    <body>
        <div class="container">

            <!-- TOPO -->
            <div class="header">
                <img src="img/logo_header.png" id="logo_header">
                <div id="nm_header"><h2 id="txtH2">Easy</h2><h2 id="txtH2" style="color: #a6ce35;">Manager</h2></div>
            </div>
            <div class="borda"></div>

            <!-- Formulario Centralizado -->
            <div class="welcome">
                <div id="msgErro">{{ isset($msg) ? $msg : ''}}</div>
                <form method="POST"  class="login">
                    
                    <p>
                        <label for="txtLogin">Login:</label>
                        <input type="text" name="txtLogin" id="login" >
                    </p>

                    <p>
                        <label for="txtSenha">Senha:</label>
                        <input type="password" name="txtSenha" id="password" >
                    </p>

                    <p>
                        <label for="empresa">Empresa:</label>
                        <select name="slcEmpresa" id="slcEmpresa">
                            <option value="">:: SELECIONE ::</option>
                        </select>
                    </p>

                    <p class="login-submit">
                        <button type="submit" class="login-button">Login</button>
                    </p>
                    <p class="forgot-password"><input type="checkbox" id="checkAdmin" name="checkAdmin" value="true" onclick="habilitar()">Administrador?</p>
                    <p class="forgot-password"><a href="#">Esqueceu a senha?</a></p>
                </form>
                
            </div>
        </div>
    </body>
</html>

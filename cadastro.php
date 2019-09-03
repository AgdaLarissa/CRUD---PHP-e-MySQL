<?php
include_once "conexao.inc";
$sql = "select * from usuario;";
$executar= mysqli_query($conexao,$sql);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="pagescss.css" />
        <meta  http-equiv="Content-Type" content="text/html;charset=iso-8859-1"> 
    </head>
    <body>
       <form action="inserirUsuario.php" method="POST" id="form" name="form">
            Nome:
            <br/>
            <input type="text" name="nome" />
            <br/>
            Login:
            <br/>
            <input type="text" name="login"  />
            <br/>
            Senha:
            <br/>
            <input type="text" name="senha" />
            <br/>
            <button type="submit" class="botao">Cadastrar</button>
</form> 
    </body>

</html>
<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
include_once "conexao.inc";
$sql = "select * from produtos;";
$executar= mysqli_query($conexao,$sql);
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css"  href="pagescss.css" /> 
    <meta  http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
    </head>
    <body>
        <form action="inserir.php" method="POST" id="form" name="form">
            Nome:
            <br/>
            <input type="text" name="nome"  />
            <br/>
            Quantidade:
            <br/>
             <input type="text" name="quantidade"  />
            <br/>
            Marca:
            <br/>
            <input type="text" name="marca"  />
            <br/>
            <button type="submit" class="botao">OK</button>
            </form>  
    </body>
</html>
<?php
include_once "conexao.inc";
header("Content-Type: text/html; charset=ISO-8859-1",true);
if(mysqli_connect_errno($conexao))
	echo "erro na conexao com o banco";
else
{
	$nome = $_GET['nome'];
	$quantidade = $_GET['quantidade'];
	$marca = $_GET['marca'];
	$idProduto = $_GET['id'];
	$sql="select*from produtos where idProduto = $idProduto";
	$executar = mysqli_query($conexao,$sql);
	while($listar= mysqli_fetch_array($executar)){
		$nome=$listar['nome'];
		$quantidade=$listar['quantidade'];
		$marca=$listar['marca'];
		
		
	}
	mysqli_close($conexao);
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css"  href="pagescss.css" /> 
<meta  http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
</head>
<body>
<form method="POST" action="atualizar.php">
idProduto <?php echo $idProduto;?>
<br>
<input type="hidden" name="idProduto" value="<?php echo $idProduto;?>">
<br>
Nome 
<br>
<input name="nome" type="text" value="<?php echo $nome;?>">
<br>
Quantidade 
<br>
<input name="quantidade" type="text" value="<?php echo $quantidade;?>">
<br>
Marca
<br>
<input name="marca" type="text" value="<?php echo $marca;?>">
<br>
<button type="submit" class="botao">OK</button>
</form>
</body>
</html>
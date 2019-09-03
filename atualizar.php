<?php

$nome=$_POST['nome'];
$quantidade=$_POST['quantidade'];
$marca=$_POST['marca'];
$idProduto=$_POST['idProduto'];

include_once "conexao.inc";

if(mysqli_connect_errno($conexao)){
	echo "erro na conexao com o banco";
}
else
{ 
$altera = "update produtos set nome='$nome' , quantidade='$quantidade' , marca='$marca' where idProduto=$idProduto";
$executar = mysqli_query($conexao,$altera);
if(mysqli_errno($conexao)){
	echo $altera;
	echo "Erro ao atualizar o cadastro ";
}
else{
	header('Location: tabela.php');
}
}
mysqli_close($conexao);

?>

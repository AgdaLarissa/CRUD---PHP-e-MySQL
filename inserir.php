<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);

$nome=$_POST['nome'];
$quantidade=$_POST['quantidade'];
$marca=$_POST['marca'];

include_once "conexao.inc";

if(mysqli_connect_errno($conexao)){
	echo "erro na conexao com o banco";
}
else
{ 
$sql = "insert into produtos(nome,quantidade,marca) values('$nome','$quantidade','$marca')";

$executar = mysqli_query($conexao,$sql);
if(mysqli_errno($conexao)){
	echo "Erro ao criar cadastro ";
}
else{
	echo "Cadastro realizado com sucesso!";
}
	header('Location: tabela.php');
}
mysqli_close($conexao);
?>


<?php

$nome=$_POST['nome'];
$login=$_POST['login'];
$senha2=$_POST['senha'];

include_once "conexao.inc";

if(mysqli_connect_errno($conexao)){
	echo "erro na conexao com o banco";
}
else
{ 
$sql = "insert into usuario(nome,login,senha) values('$nome','$login','$senha2')";

$executar = mysqli_query($conexao,$sql);
if(mysqli_errno($conexao)){
	echo "Erro ao criar cadastro ";
}
else{
	header('Location: formulario.html');
}
}
mysqli_close($conexao);
?>


<?php
include_once "conexao.inc";
if(isset($_POST['login']) && isset($_POST['senha'])){
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM usuario where login = '$login' AND senha = '$senha'  ";
$executar=mysqli_query($conexao,$sql);
$total=mysqli_num_rows($executar);
if($total == 1){
	while($percorrer = mysqli_fetch_array($executar)){
		$idUsuario=$percorrer['idUsuario'];
		
		if ($idUsuario == true){
			header('Location: tabela.php');
		} 
		

}
}
else{
echo " Usuario ou senha incorretos";
	header('Location: cadastro.php');
		
}
}
?>

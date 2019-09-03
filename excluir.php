<?php
include_once "conexao.inc";
header("Content-Type: text/html; charset=ISO-8859-1",true);
if(isset($_GET['id'])) { 

	$nome = $_GET['nome'];
	$quantidade = $_GET['quantidade'];
	$marca = $_GET['marca'];
	$idProduto = $_GET['id'];

	if(mysqli_connect_errno($conexao)){
       echo "erro na conexao com o mysql";
    }
	else{
      $sql = "select * from produtos where idProduto = $idProduto";
	  $executar= mysqli_query($conexao,$sql);
	  while($listar=mysqli_fetch_array($executar)){
			$nome=$listar['nome'];
			$quantidade=$listar['quantidade'];
			$marca=$listar['marca'];
		
	  }
    }

}
if(isset($_POST['idProduto']))
{
	$idProduto= $_POST['idProduto'];
	$sql = "delete from produtos where idProduto =$idProduto";
	$executar= mysqli_query($conexao,$sql);
	if(mysqli_errno($conexao)) 
		"erro ao deletar produto";
	else
		header('Location: tabela.php');
	
}

?>
<html>
<head>
<script language="Javascript">
function confirmacao(form) {
     return confirm("Deseja remover esse produto?");
 
}
</script>
<link rel="stylesheet" type="text/css"  href="pagescss.css" /> 
</head>

<form method="POST" action="excluir.php" onSubmit="return confirmacao(this);" >
<?php
header("Content-Type: text/html; charset=ISO-8859-1",true); 
 if(isset($_GET['id'])){
 echo "Codigo do Produto:".$idProduto;
 echo "<br>";
 echo "<input type='hidden' name='idProduto' value=$idProduto>";
 echo "<br>";
 echo "Nome:";
 echo "<br>";
 echo "<input type='text' name='nome' value=$nome>";
 echo "<br/><br/>";
 echo "Quantidade:";
 echo "<br>";
 echo "<input type='text' name='quantidade' value=$quantidade>";
 echo "<br/><br/>";
 echo "Marca:";
 echo "<br>";
 echo "<input type='text' name='marca' value=$marca>";
 echo "<br/><br/>";
 echo "<br>";
 echo "<button class='botao' type='submit' name='excluir'>OK</button>";
 echo "</form>";
 echo "</html>";
 }
 else
	 echo "";
 
?>

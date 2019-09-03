<?php
include_once "conexao.inc";
$sql = "SELECT * FROM produtos";
$idProduto = $_POST['idProduto'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$marca = $_POST['marca'];
$executar= mysqli_query($conexao,$sql);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css"  href="pagescss.css" /> 
<meta  http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
<title>Produtos</title>
 </head>
<body>

        
  <h2>Estoque:</h2>

  <table>
    <tr>
      <td>Codigo</td>
      <td>Nome</td>
      <td>Quantidade</td>
      <td>Marca</td>
      <td colspan="2" style="text-align:center;">-</td>
    </tr>
	
    <?php header("Content-Type: text/html; charset=ISO-8859-1",true);
       while($listar=mysqli_fetch_array($executar)) { ?>
    <tr>
      <td><?php echo $listar['idProduto']; ?></td>
      <td><?php echo $listar['nome']; ?></td>
      <td><?php echo $listar['quantidade']; ?></td>
      <td><?php echo $listar['marca']; ?></td>
      <td><a href="editar.php?id=<?php echo $listar['idProduto']; ?>">Editar</a></td>
      <td><a href="excluir.php?id=<?php echo $listar['idProduto']; ?>">Excluir</a></td>
    </tr>
    <?php } ?>

   
  </table>

   <br/>
   <h2><a href="cadastroProduto.php">Novo</a></h2>
   <br/>
   <h2><a href="sair.php">Sair</a></h2>
</body>
</html>







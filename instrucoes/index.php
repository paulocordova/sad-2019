<?php
require_once('Produto.php');

$conexao = new mysqli('localhost', 'root', '', 'bd_comercial');

$sql = $conexao->prepare('select nome_produto, unid_medida, preco from produto');
$sql->execute();

$resultado = $sql->get_result();

$produtos = array();

if($resultado->num_rows !== 0){
   while($linha = $resultado->fetch_assoc()){
      $produto = new Produto();
      $produto->setProduto($linha['nome_produto'], $linha['unid_medida'],
                           $linha['preco']);
      $produtos[] = $produto;
   }
}
foreach($produtos as $registro){
   echo $registro->nome." - ".$registro->preco;
   echo "<br>";
}
?>
<?php
class Produto{
   public $nome;
   public $unidadeMedida;
   public $preco;

   public function setProduto($nome, $unidadeMedida, $preco){
      $this->nome = $nome;
      $this->unidademedida = $unidadeMedida;
      $this->preco = $preco;
   }
}
?>
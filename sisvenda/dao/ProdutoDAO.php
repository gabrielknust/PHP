<?php
include_once '../model/Produto.php';
include_once 'Conexao.php';
class ProdutoDAO
{
  function adicionar($produto)
  {
      try{
          $pdo=Conexao::connect();
          $sql='Insert produto(nome,descricao,preco) VALUES (;nome,:descricao,:preco)';
          $stmt=$pdo->prepare($sql);
          $stmt->execute(array(
          ':nome'=>$produto->getNome(),
          ':descricao'=>$produto->getDescricao(),
          ':preco'=>$produto->getPreco()
          ));

      } catch (PDOException $e){
          echo 'Error: '.$e->getMessage();
      }
  }
}
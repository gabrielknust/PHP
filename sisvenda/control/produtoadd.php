<?php
include_once '../model/Produto.php';
include_once '../dao/ProdutoDAO.php';
$nome=$_GET['nome'];
$descricao=$_GET['descricao'];
$preco=$_GET['preco'];
$produto= new Produto();
    $produto->setNome($nome);
    $produto->setDescricao($descricao);
    $produto->setPreco($preco);   
    $produtoDAO= new ProdutoDAO();
    $produtoDAO->adicionar($produto);
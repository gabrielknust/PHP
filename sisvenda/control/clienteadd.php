<?php
$nome=$_GET['nome'];
$cpf=$_GET['cpf'];
$sobrenome=$_GET['sobrenome'];
$login=$_GET['login'];
$senha=$_GET['senha'];
$endereco=$_GET['endereco'];
$cliente= new Cliente();
$cliente->setNome($nome);
$cliente->setSobrenome($descricao);
$cliente->setCpf($cpf);
$cliente->setLogin($login);
$cliente->setSenha($senha);
$cliente->setEndereco($endereco);
$clienteDAO= new ClienteDAO();
$clienteDAO->adicionar($cliente);
?>
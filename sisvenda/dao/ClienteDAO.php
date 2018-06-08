<?php
include_once '../model/Produto.php';
include_once 'Conexao.php';
class ClienteDAO
{
    function adicionar($cliente)
    {
        try{
            $pdo=Conexao::connect();
            $sql='Insert cliente(nome,sobrenome,cpf,login,senha,endereco) VALUES (;nome,:sobrenome,:cpf,:login,:senha,:endereco)';
            $stmt=$pdo->prepare($sql);
            $stmt->bindValue(':nome',$cliente->getNome());
            $stmt->bindValue(':sobrenome',$cliente->getSobrenome());
            $stmt->bindValue(':cpf',$cliente->getCpf());
            $stmt->bindValue(':login',$cliente->getLogin());
            $stmt->bindValue(':senha',$cliente->getSenha());
            $stmt->bindValue('endereco',$cliente->getEndereco());
            echo 'Sucesso';
        } catch (PDOException $e){
            echo 'Error: '.$e->getMessage();
        }
    }
}

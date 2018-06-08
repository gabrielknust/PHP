<?php

class Cliente
{
    private $nome;
    private $sobrenome;
    private $cpf;
    private $login;
    private $senha;
    private $endereco;
    public function getNome()
    {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    
}


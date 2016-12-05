<?php 
  class Funcionario{

    private $matricula;
    private $nome;
    private $email;
    private $rua;
    private $bairro;
    private $cidade;
    private $cep;
    private $telefone;
    private $login;
    private $senha;
    private $confSenha;
    private $observacao;
            
    function __construct($matricula, $nome, $email, $rua, $bairro, $cidade, $cep, $telefone, $login, $senha, $confSenha, $observacao) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->email = $email;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->login = $login;
        $this->senha = $senha;
        $this->confSenha = $confSenha;
        $this->observacao = $observacao;
    }

    
    function getMatricula() {
        return $this->matricula;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCep() {
        return $this->cep;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getConfSenha() {
        return $this->confSenha;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setConfSenha($confSenha) {
        $this->confSenha = $confSenha;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }


  }
?>
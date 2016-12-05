<?php 
  class Motorista{

    private $nome;
    private $email;
    private $cnh;
    private $telefone;
    private $endereco;
    private $cidade;
    private $estado;
    private $cep;
    private $observacoes;
    
    function __construct($nome, $email, $cnh, $telefone, $endereco, $cidade, $estado, $cep, $observacoes) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cnh = $cnh;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->observacoes = $observacoes;
    }

        function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getCnh() {
        return $this->cnh;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCep() {
        return $this->cep;
    }

    function getObservacoes() {
        return $this->observacoes;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCnh($cnh) {
        $this->cnh = $cnh;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }


            
  }
?>
<?php 
  class Veiculo{

    private $fabricante;
    private $nChassis;
    private $modelo;
    private $capacidade;
    private $quantEixos;
    private $nPlaca;
    private $anoFabricacao;
    private $numFrota;
    
    function __construct($fabricante, $nChassis, $modelo, $capacidade,$quantEixos, $nPlaca, $anoFabricacao, $numFrota) {
        $this->fabricante = $fabricante;
        $this->nChassis = $nChassis;
        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
        $this->quantEixos = $quantEixos;
        $this->nPlaca = $nPlaca;
        $this->anoFabricacao = $anoFabricacao;
        $this->numFrota = $numFrota;
    }
    function getQuantEixos() {
        return $this->quantEixos;
    }

    function setQuantEixos($quantEixos) {
        $this->quantEixos = $quantEixos;
    }

        
    function getFabricante() {
        return $this->fabricante;
    }

    function getNChassis() {
        return $this->nChassis;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getCapacidade() {
        return $this->capacidade;
    }

    function getNPlaca() {
        return $this->nPlaca;
    }

    function getAnoFabricacao() {
        return $this->anoFabricacao;
    }

    function getNumFrota() {
        return $this->numFrota;
    }

    function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    function setNChassis($nChassis) {
        $this->nChassis = $nChassis;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setCapacidade($capacidade) {
        $this->capacidade = $capacidade;
    }

    function setNPlaca($nPlaca) {
        $this->nPlaca = $nPlaca;
    }

    function setAnoFabricacao($anoFabricacao) {
        $this->anoFabricacao = $anoFabricacao;
    }

    function setNumFrota($numFrota) {
        $this->numFrota = $numFrota;
    }


    
  }
?>
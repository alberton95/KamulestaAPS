<?php
require_once '../Class/Veiculo.class.php';
require_once '../DAO/VeiculoDAO.php';

    $fabricante = $_POST['fabricante'];
    $nchassi = $_POST['Numero_do_Chassis'];
    $modelo =  $_POST['Modelo'];
    $capacidade = $_POST['capacidade'];
    $nPlaca = $_POST['nPlaca'];
    $dataFabricacao = $_POST['data_de_fabricacao'];
    $nFrota = $_POST['nFrota'];
    
    $veiculo = new Veiculo($fabricante, $nchassi, $modelo, $capacidade,"7", $nPlaca, $dataFabricacao, $nFrota);
    
    $veiculoDAO = new VeiculoDAO();
    
    $veiculoDAO->cadastrar($veiculo);
    
    header('Location: ../opcoesAdmin.html');


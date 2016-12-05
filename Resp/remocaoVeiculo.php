<?php 
require_once '../Class/Veiculo.class.php';
require_once '../DAO/VeiculoDAO.php';

	$nPlaca = $_POST['nPlaca'];
	$veiculo = new Veiculo("", "", "", "", "", $nPlaca, "", "");

	$veiculoDAO = new VeiculoDAO();
    $veiculoDAO->remover($veiculo);

 	header('Location: ../opcoesAdmin.html');
 ?>
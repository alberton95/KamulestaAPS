<?php

require_once '../Class/Veiculo.class.php';
require_once 'VeiculoDAO.php';

$v =  new Veiculo("fabriante", "nChsis", "mode", "cacidade","quantos", "nPla", "anoFabacao", "mFrota");

$vDAO = new VeiculoDAO();

$vDAO->cadastrar($v);

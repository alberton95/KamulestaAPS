<?php 

require_once '../Class/Motorista.class.php';
require_once '../DAO/MotoristaDAO.php';

    $cnh = $_POST['cnh'];

    $motorista = new Motorista("", "", $cnh, "", "", "", "", "", "");

    $motoristaDAO = new MotoristaDAO();
    $motoristaDAO->remover($motorista);

    header('Location: ../opcoesAdmin.html');
 ?>
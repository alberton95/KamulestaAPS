<?php 

require_once '../Class/Motorista.class.php';
require_once '../DAO/MotoristaDAO.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cnh = $_POST['cnh'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $observacao = "null";

    $motorista = new Motorista($nome, $email, $cnh, $telefone, $endereco, $cidade, $estado,  $cep, $observacao);

    $motoristaDAO = new MotoristaDAO();
    $motoristaDAO->cadastrar($motorista);

    header('Location: ../opcoesAdmin.html');
 ?>
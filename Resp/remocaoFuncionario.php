<?php 
require_once '../Class/Funcionario.class.php';
require_once '../DAO/FuncionarioDAO.php';

	$matricula = $_POST['matricula'];
	$funcionario = new Funcionario($matricula, "", "", "", "", "", "", "", "", "", "", "");

	$funcionarioDAO = new FuncionarioDAO();
    $funcionarioDAO->remover($funcionario);

    header('Location: ../opcoesAdmin.html');
 ?>
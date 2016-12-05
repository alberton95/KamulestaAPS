<?php 

require_once '../Class/Funcionario.class.php';
require_once '../DAO/FuncionarioDAO.php';

    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confSenha'];
    $observacao = "null";

    $funcionario = new Funcionario($matricula, $nome, $email, $rua, $bairro, $cidade, $cep, $telefone, $login, $senha, $confSenha, $observacao);

    $funcionarioDAO = new FuncionarioDAO();
    $funcionarioDAO->cadastrar($funcionario);

    header('Location: ../opcoesAdmin.html');

 ?>
<?php
/**
 * Description of FuncionarioDAO
 *
 * @author Eliel Lopes
 */
require_once '../Config/Connection.php';
class FuncionarioDAO {
    
    function cadastrar(Funcionario $funcionario){
        
        try{
            $open = new Connection();
            $conexao = $open->getConexao();   


            $stm = $conexao->prepare("INSERT INTO funcionario(matricula, nome, email, rua, bairro, cidade, cep, telefone, login, senha, confSenha, observacao) VALUES (:matricula, :nome, :email, :rua, :bairro, :cidade, :cep, :telefone, :login, :senha, :confSenha, :observacao)");
            $stm->bindValue(':matricula', $funcionario->getMatricula());
            $stm->bindValue(':nome', $funcionario->getNome());
            $stm->bindValue(':email', $funcionario->getEmail());
            $stm->bindValue(':rua', $funcionario->getRua());
            $stm->bindValue(':bairro', $funcionario->getBairro());
            $stm->bindValue(':cidade', $funcionario->getCidade());
            $stm->bindValue(':cep', $funcionario->getCep());
            $stm->bindValue(':telefone', $funcionario->getTelefone());
            $stm->bindValue(':login', $funcionario->getLogin());
            $stm->bindValue(':senha', $funcionario->getSenha());
            $stm->bindValue(':confSenha', $funcionario->getConfSenha());
            $stm->bindValue(':observacao', $funcionario->getObservacao());

            return $stm->execute();
            
        } catch (Exception $ex) {
            echo 'Error ao cadastrar funcionario - '.$ex->getMessage();
        }
        
    }
    
    function remover(Funcionario $funcionario){
        
        try{
            $open = new Connection();
            $conexao = $open->getConexao();   


            $stm = $conexao->prepare("DELETE FROM funcionario WHERE matricula = :matricula ");
            $stm->bindValue(':matricula', $funcionario->getMatricula());
            
            return $stm->execute();
            
        } catch (Exception $ex) {
            echo 'Error ao remover funcionario - '.$ex->getMessage();
        }
        
    }
    
    function alterar(Funcionario $funcionario){
        
    }
    
}

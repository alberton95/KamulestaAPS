<?php
/**
 * Description of MotoristaDAO
 *
 * @author Eliel Lopes
 */
require_once '../Config/Connection.php';
class MotoristaDAO {
    
    function cadastrar(Motorista $motorista){
        
        try{
            $open = new Connection();
            $conexao = $open->getConexao();   


            $stm = $conexao->prepare("INSERT INTO motorista(nome, email, cnh, telefone, endereco, cidade, estado, cep, observacoes) VALUES (:nome, :email, :cnh, :telefone, :endereco, :cidade, :estado, :cep, :observacoes)");
            $stm->bindValue(':nome', $motorista->getNome());
            $stm->bindValue(':email', $motorista->getEmail());
            $stm->bindValue(':cnh', $motorista->getCnh());
            $stm->bindValue(':telefone', $motorista->getTelefone());
            $stm->bindValue(':endereco', $motorista->getEndereco());
            $stm->bindValue(':cidade', $motorista->getCidade());
            $stm->bindValue(':estado', $motorista->getEstado());
            $stm->bindValue(':cep', $motorista->getCep());
            $stm->bindValue(':observacoes', $motorista->getObservacoes());

            return $stm->execute();
            
        } catch (Exception $ex) {
            echo 'Error ao cadastrar motorista - '.$ex->getMessage();
        }
        
    }
    
    function remover(Motorista $motorista){
        
        try{
            $open = new Connection();
            $conexao = $open->getConexao();   


            $stm = $conexao->prepare("DELETE FROM motorista WHERE cnh = :cnh ");
            $stm->bindValue(':cnh', $motorista->getCnh());
            
            return $stm->execute();
            
        } catch (Exception $ex) {
            echo 'Error ao remover motorista - '.$ex->getMessage();
        }
        
    }
    
    function alterar(Motorista $motorista){
        
        try{
            
            $open = new Connection();
            $conexao = $open->getConexao();
            
            $stm =  $conexao->prepare("UPDATE motorista SET nome=:nome, email=:email, telefone=:telefone, endereco=:endereco, cidade=:cidade, estado=:estado, cep=:cep, observacoes=:observacoes WHERE cnh=:cnh");
            $stm->bindValue(':nome', $motorista->getNome());
            $stm->bindValue(':email', $motorista->getEmail());
            $stm->bindValue(':telefone', $motorista->getTelefone());
            $stm->bindValue(':endereco', $motorista->getEndereco());
            $stm->bindValue(':cidade', $motorista->getCidade());
            $stm->bindValue(':estado', $motorista->getEstado());
            $stm->bindValue(':cep', $motorista->getCep());
            $stm->bindValue(':observacoes', $motorista->getObservacoes());
            
            $stm->execute();
            
        } catch (Exception $ex) {
            
            echo 'Error ao alterar motorista - '.$ex->getMessage();

        }
        
    }
    
}

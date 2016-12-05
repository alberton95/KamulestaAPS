<?php
/**
 * Description of VeiculoDAO
 *
 * @author Eliel Lopes
 */
require_once '../Config/Connection.php';
class VeiculoDAO {
    
    function cadastrar(Veiculo $veiculo){
        
         try{
            $open = new Connection();
            $conexao = $open->getConexao();   


            $stm = $conexao->prepare("INSERT INTO veiculo(fabricante, nChassis, modelo, capacidade, quantEixos, nPlaca, anoFabricacao, numFrota) VALUES (:fabricante, :nChassis, :modelo, :capacidade, :quantEixos, :nPlaca, :anoFabricacao, :numFrota)");
            $stm->bindValue(':fabricante', $veiculo->getFabricante());
            $stm->bindValue(':nChassis', $veiculo->getNChassis());
            $stm->bindValue(':modelo', $veiculo->getModelo());
            $stm->bindValue(':capacidade', $veiculo->getCapacidade());
            $stm->bindValue(':quantEixos', $veiculo->getQuantEixos());
            $stm->bindValue(':nPlaca', $veiculo->getNPlaca());
            $stm->bindValue(':anoFabricacao', $veiculo->getAnoFabricacao());
            $stm->bindValue(':numFrota', $veiculo->getNumFrota());
            

            return $stm->execute();
            
        } catch (Exception $ex) {
            echo 'Error ao cadastrar veiculo - '.$ex->getMessage();
        }
        
    }
    
    function remover(Veiculo $veiculo){
        
        try{
            $open = new Connection();
            $conexao = $open->getConexao();   


            $stm = $conexao->prepare("DELETE FROM veiculo WHERE nPlaca = :nPlaca ");
            $stm->bindValue(':nPlaca', $veiculo->getNPlaca());
            
            return $stm->execute();
            
        } catch (Exception $ex) {
            echo 'Error ao remover veiculo - '.$ex->getMessage();
        }
        
    }
    
    
}
?>
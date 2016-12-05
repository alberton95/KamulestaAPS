<?php
/**
 * Description of Connection
 *
 * @author Eliel Lopes
 */
class Connection {
    
    private $url = "localhost";
    private $nomeBD = "projeto";
    private $user = "root";
    private $password = "";
    
    public function getConexao(){
       
        try{
            $con = new PDO("mysql:host=$this->url;dbname=$this->nomeBD","$this->user","$this->password");  
            return $con;
        } catch (Exception $ex) {
            echo 'ERROR -'.$ex->getMessage();
        }
        return $con;

    }// getConexao()
    
}

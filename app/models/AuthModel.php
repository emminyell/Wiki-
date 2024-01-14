<?php 

namespace app\models;

use app\helpers\UserHelper;
use app\config\DataBase;
use PDO;
class AuthModel extends UserHelper
{

    private $db;

    public function __construct(){
        $this->db = DataBase::getInstance(); // Assuming getInstance() returns an instance of the PDO connection.
    }

    public function register(){
        try {
            $query = $this->db->getConnection()->prepare("INSERT INTO users (nom, email, password, role) VALUES (:nom, :email, :password, :role)");
            $query->bindValue(':nom', $this->getNom());
            $query->bindValue(':email', $this->getEmail());
            $query->bindValue(':password', $this->getPassword());
            $query->bindValue(':role', 0);
            $query->execute();
        } catch(\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function login(){
        try{
            $query = $this->db->getConnection()->prepare("SELECT id, email, password, role FROM users WHERE email = :email and password = :password");  
            $query->bindValue(':email', $this->getEmail());
            $query->bindValue(':password', $this->getPassword());
            
            $query->execute();
            $result = $query->fetch(\PDO::FETCH_OBJ);
            return !empty($result) ? $result : false;
        }catch(\PDOException $e) {
            echo "Error: " . $e->getMessage();
       
        } 
    }


    public function logout(){
        session_destroy();
    }

}
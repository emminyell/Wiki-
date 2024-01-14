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

    public function register($name,$email,$password){
        try {
            $query = $this->db->getConnection()->prepare("INSERT INTO users (nom, email, password, role) VALUES (:nom, :email, :password, :role)");
            $query->bindValue(':nom', $name);
            $query->bindValue(':email', $email);
            $query->bindValue(':password', $password);
            $query->bindValue(':role', 0);
            $success =  $query->execute();

            return $success;
        } catch(\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function login($email,$password){
        try{
            $query = $this->db->getConnection()->prepare("SELECT * FROM users WHERE email = :email and password = :password");  
            $query->bindValue(':email',$email);
            $query->bindValue(':password', $password);
            $query->execute();
            $result = $query->fetch(\PDO::FETCH_ASSOC);

            return !empty($result) ? $result : false;
        }catch(\PDOException $e) {
            echo "Error: " . $e->getMessage();
       
        } 
    }


    public function logout(){
        session_destroy();
    }

}
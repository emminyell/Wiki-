<?php 

namespace app\controllers;

use app\models\UserModel;
use app\models\AuthModel;
use app\helpers\UserHelper;

class AuthController extends AuthModel
{
  
    private $user;
   
    public function __construct(){
        $this->user = new AuthModel;
    }
    public function signin(){
      
        $this->view('/../../Views/login.php');
    }
    public function register(){
        $this->RegisterValidation();
        
        $this->user->register();
        
        require_once __DIR__.'/../../Views/signup.php';
        
    }
    
    public function login(){
        
        // if (isset($_POST)){
        //     var_dump($_POST);
        //     die();
        // }
            
        
        
        $this->LoginValidation();
       $exists = $this->user->login() ;
       if(!$exists){
        header("location: http://localhost/wiki-sc/views/login.php");
       }else{
           $_SESSION["role"]= $exists->role;
           $_SESSION["id"]= $exists->id;
        if($exists->role){
            header("location: http://localhost/wiki-sc/views/dashboard.php");
           }else{
            header("location:http://localhost/wiki-sc/views/home.php");
           }
       }
        
    }

    public function logout(){
        $this->user->logout();
        header("location:http://localhost/wiki-sc/views/login.php");
    }
    public function RegisterValidation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nom = $this->validateNom();
            $email = $this->validateEmail();
            $password = $this->validatePassword();
            $this->user->setNom($nom);
            $this->user->setEmail($email);
            $this->user->setPassword($password);

            return true;
        }

        return false;
    }

    public function LoginValidation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $this->validateEmail();
            $password = $this->validatePassword();
            
            $this->user->setEmail($email);
            $this->user->setPassword($password);

            return true;
        }

        return false;
    }

    private function validateNom()
    {
        if (isset($_POST["nom"]) && strlen($_POST["nom"]) > 2) {
            return htmlspecialchars($_POST["nom"]);
        }

        return false;
    }

    private function validateEmail()
    {
        if (isset($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            return htmlspecialchars($_POST["email"]);
        }

        return false;
    }

    private function validatePassword()
    {
        if (isset($_POST["password"]) && strlen($_POST["password"]) >= 8 && preg_match('/[A-Z]/', $_POST["password"]) && preg_match('/\d/', $_POST["password"]) && preg_match('/[^A-Za-z\d]/', $_POST["password"]) )
     {
        return htmlspecialchars($_POST["password"]);
    }

    return false;
    }
}
<?php 
namespace app\Controllers;
use app\Models\AuthModel;

class SignupController
{
    public function register()
    {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
                $tags = new AuthModel;
                $nom = $_POST['nom'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $tags->addcategories($nom,$email,$password);
                header("Location:index.php?route=home ");
    
            }
        }
        public function index() {
        require '../Views/signup.php';

    }
}

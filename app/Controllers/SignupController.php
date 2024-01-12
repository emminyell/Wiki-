<?php 
namespace app\Controllers;
use app\Models\AuthModel;

class SignupController
{
    public function register()
    { 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            $AuthModel = new AuthModel();
            $AuthModel->setnom($nom);
            $AuthModel->setEmail($email);
            $AuthModel->setPassword($password);
            $AuthModel->insertUser();

            }
    }
    public function index() {
        require '../Views/signup.php';

    }
}

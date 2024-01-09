<?php
include('../database/Database.php');
include('../models/AuthModel.php');

$conn = new Database();

$AuthController = new AuthController($conn);
$AuthController->register();
$AuthController->login();

class AuthController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function login()
    {
        echo 'hiii';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email address";
            } else {
                $AuthModel = new AuthModel($this->conn);
                $AuthModel->setEmail($email);
                $AuthModel->loginUser($password);
            }
        } 
    }
    public function register()
    {   
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
            $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            $AuthModel = new AuthModel($this->conn);
            $AuthModel->setprenom($prenom);
            $AuthModel->setnom($nom);
            $AuthModel->setEmail($email);
            $AuthModel->setPassword($password);
            $AuthModel->insertUser();
            header('Location: ../view/login.php');
                // header!!!!!
            }
        }

}
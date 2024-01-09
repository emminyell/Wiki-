<?php 
include('../controller/AuthController.php');
include('../database/Database.php');
$conn = new Database('127.0.0.1:3307', 'root', '', 'wiki');

class MyRouter{
    public $action;
    public $AuthController;

    public function __construct($conn){
        $this->AuthController = new AuthController($conn);
        if (isset($_GET['action'])) {
            $this->action = $_GET['action'];
        } 
    }

    public function redirectAction(){
        switch($this->action){
            case 'login' :
                $this->AuthController->login();
            default : 
                header('location: ../public/index.php');
                break;
        }
    }
}

$router = new MyRouter($conn); //instantiation
$router->redirectAction();

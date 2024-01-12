<?php 
namespace app\Controllers;
use app\Models\AuthModel;
class LoginController {


    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';

            $AuthModel = new AuthModel($this->conn);
            $AuthModel->setEmail($email);
            $AuthModel->loginUser($password);
        } 
    }
    public function index() {
        require '../Views/login.php';

    }
}
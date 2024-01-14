<?php
namespace app\controllers;
session_start();
USE app\models\AuthModel;
class SignupController 
{

    public function signup() {

        if (isset($_POST["register"])) {

            $name = $_POST["nom"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $authModel = new AuthModel();
            $success = $authModel->register($name,$email,$password); 

            if($success) {
                echo "done";
            } else {
                echo"not done";
            }
        }

        

        require '../Views/signup.php';
    }

    public function signin() {

        if (isset($_POST["signin"])) {
            // var_dump($_POST);
            // die();
            $email = $_POST["email"];
            $password = $_POST["pass"];

            $authModel = new AuthModel();
            $result = $authModel->login($email,$password); 

            if($result){
                $_SESSION["user_id"] = $result["id"];
                $_SESSION["user_name"] = $result["nom"];
                $_SESSION["user_email"] = $result["email"];
                $_SESSION["user_role"] = $result["role"];

                if($result["role"] == 1){
                    header('location: ?route=dashboard'); 
                }else{
                    header('location: ?route=home');
                }
                

                // die();
            }else{
                echo"error";
            }
        }

        require '../Views/login.php';
    }
}
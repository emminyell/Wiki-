<?php 
namespace app\Controllers;
session_start();

class ProfileController {
    public function profile() {
        require '../Views/profile.php';
    }
}
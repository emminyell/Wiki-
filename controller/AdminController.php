<?php
include('../database/Database.php');
include('../models/AuthModel.php');
include('../models/CategorieModel.php');

$conn = new Database('localhost', 'root', '', 'wiki');
$AdminController = new CategorieModel($conn);
$results=$AdminController->getAllCategories();

class AdminController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getCategories(){
        
    }




}
<?php
include('../database/Database.php');
require "..\models\HomeModel.php";

class HomeController{

    public function gethome(){
        $wikis = new HomeModel;
        $allWikis = $wikis->getwikis(); 
        
       
        require_once __DIR__.'/../public/index.php';
    }
}
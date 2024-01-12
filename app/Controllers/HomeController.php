<?php
namespace app\Controllers;
use app\Models\WikisModel;
use app\Models\categoriesModel;

class HomeController{

    public function gethome(){
        $wikis = new WikisModel;
        $allWikis = $wikis->getwikis(); 

        $categories =new CategoriesModel();
        $allcategories=$categories->getcategories();
        
       
        require_once __DIR__.'/../../Views/home.php';
    }
}
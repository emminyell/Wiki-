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

        $Rcategories =new CategoriesModel();
        $Rallcategories=$Rcategories->getRecentCategories();

        $Rwikis = new WikisModel;
        $RallWikis = $Rwikis->getRecentwikis(); 
        
       
        require_once __DIR__.'/../../Views/home.php';
    }
}
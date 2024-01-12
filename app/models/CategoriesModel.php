<?php
namespace app\Models ;
use app\config\DataBase;
use PDO;

class CategoriesModel {

    private $db;

    public function __construct()
    {
        $this->db =DataBase::getInstance()->getConnection();
    }
  
    public function addcategories($nom){
        $stmt =  $this->db->prepare("INSERT INTO categories (nom)
        VALUE (?)");
        $stmt->execute([$nom]);
       
    }
    public function getcategories()
    {
            $query = "SELECT `nom` FROM `categories` ";  
             $stm = $this->db->prepare($query);
            $stm->execute();
            
           
            $res = $stm->fetchAll(PDO::FETCH_ASSOC);
          
            return($res);
    }
}
    
<?php
namespace app\Models;
use app\config\DataBase;
USE PDO;
class WikisModel {

   
    protected $db;
    public function __construct() {
        
        $this->db = DataBase::getInstance()->getConnection();

    }
    public function getwikis(){
        $query = "SELECT w.titre, c.nom, w.contenu , w.date_creation FROM wikis w INNER JOIN categories c ON w.id_categorie = c.id WHERE w.statue = 1 LIMIT 6";  
         $stm = $this->db->prepare($query);
        $stm->execute();
        
       
        $res = $stm->fetchAll(PDO::FETCH_ASSOC);
      
        return($res);
    }

    public function getRecentwikis(){
        $query = "SELECT w.titre, c.nom, w.contenu, w.date_creation
        FROM wikis w
        INNER JOIN categories c ON w.id_categorie = c.id
        WHERE w.statue = 1
        ORDER BY w.date_creation DESC
        LIMIT 3;";  
         $stm = $this->db->prepare($query);
        $stm->execute();
        
       
        $res = $stm->fetchAll(PDO::FETCH_ASSOC);
      
        return($res);
    }
}

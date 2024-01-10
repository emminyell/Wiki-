<?php

class CategorieModel
{
    public $conn;
    public $nom;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function setnom($nom)
    {
    $this->nom = $nom;
    }


    public function getAllCategories()
    {
        $req="SELECT * from categorie";
        $query=$this->conn->query($req);
        while($array=$query->fetch_assoc()) {
            $users[]=$array;
        }
        return $users;
    }

        
        
}
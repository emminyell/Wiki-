<?php 

namespace App\helpers;


class UserHelper
{
    
    private $id;
    private $nom;
    private $email;
    private $role;	
    private $password;

    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;
    }

  
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getrole()
    {
        return $this->role;
    }

    public function setrole($role)
    {
        $this->role = $role;
    }

    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

    
}
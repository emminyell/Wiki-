<?php

namespace App\models;

use Core\Database;
use PDO;

class WikiTag
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Database();
    }

    public function createWikiTag($idWiki, $idTag)
    {
        try {
            $query = $this->connection->getConnection()->prepare("INSERT INTO wikiTag (id_wiki, id_tag) VALUES (:idWiki, :idTag)");
            $query->bindValue(':idWiki', $idWiki);
            $query->bindValue(':idTag', $idTag);
            $query->execute();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function deleteWikiTag($id)
    {
        try {
            $query = $this->connection->getConnection()->prepare("DELETE FROM wikiTag WHERE id_wiki = :id OR id_tag = :id");
            $query->bindValue(':id', $id);
            $query->execute();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
<?php
require_once('../database/Database.php');

class HomeModel extends DataBase {

    public function getwikis() {
        $query = "SELECT `titre`, `contenu`, `date_creation` FROM `wiki` ";
        $result = $this->getConnection()->query($query);

        if (!$result) {
            // Handle query error
            $errorMessage = $this->getConnection()->error;
            // Log or display the error message as needed
            error_log("Query error: $errorMessage");
            return [];
        }

        $res = $result->fetchAll(PDO::fetch_OBJ);

        return $res;
    }
}

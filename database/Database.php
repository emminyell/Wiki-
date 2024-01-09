<?php
class Database {
    private $conn;
    private $servername ='127.0.0.1:3307';
    private $username ='root';
    private $password = '';
    private $dbname ='wiki';

    public function __construct() {

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function prepare($query) {
        return $this->conn->prepare($query);
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }
}

?>

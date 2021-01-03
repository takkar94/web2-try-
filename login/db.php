<?php 
    require '../login/log_control.php';
    class database {

    private $db_host = "localhost";
    private $db_name = "web1";
    private $db_user = "root";
    private $db_pass = "";
    private $pdo;

    private function hoster() {
        $dsn = 'mysql:host' . $this->db_host . ';dbname=' . $this->db_name . ';charset=utf8mb4';
        try{
            $this->pdo = new PDO($dsn, $this->db_user , $this->db_pass); 
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo "Frankfurt";
        }
    }

    public function insertData($sql,$data){
        $stmt = $this->pdo->prepare($sql);
        $success = $stmt -> execute($data);
        return $success;
    }


    }


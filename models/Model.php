<?php 
class Model {
    public $pdo;

    function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:dbname=yoyakudb; host=127.0.0.1; charset=utf8', 'root', '');
        } catch (PDOException $e) {
            echo 'DB接続エラー:' . $e->getMessage();
            exit;
        }
    }
}
?>
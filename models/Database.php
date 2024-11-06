<?php 
class Database {
    static private $instance = null;

    protected $db;

    public function __construct()
    {
        try {
            if(self::$instance === null){
                self::$instance = new \PDO('mysql:dbname=db;charset=utf8', 'root', '');
            }
            $this->db = self::$instance;
        } catch (\Throwable $th) {
            die('Erreur : ' . $th = 'Erreur');
        }
    }
}
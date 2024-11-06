<?php 
    require_once './models/Database.php';

    class Messages extends Database{
        public $id;
        public $text;
        public $dateCreation;
        public $idUsers;
        public $idBlogs;

        public function getAllMessages(){
            $sql = 'SELECT * FROM `messages` INNER JOIN `blogs` WHERE `messages.id` = `blogs.id`';
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $messages = $stmt->fetchAll();
            return $messages;
        }
    }


























?>
<?php 
    require_once 'models/Database.php';

    class Blogs extends Database{
        public $id;
        public $title;
        public $dateCreation;
        public $idUsers;

        public function getAllBlogs(){
            $sql = 'SELECT * FROM `blogs`';
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $blogs = $stmt->fetchAll();
            return $blogs;
        }

        public function getOneBlog(){
            $sql = 'SELECT * FROM `blogs` WHERE `id` = ?';
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$this->id]);
            $blog = $stmt->fetch();
            return $blog;
        }


    }
    































?>
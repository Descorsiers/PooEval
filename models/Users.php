<?php 
    require_once './models/Database.php';

    class Users extends Database{
        
        public $id;
        public $email;
        public $firstname;
        public $lastname;
        private $password;
        public $dateCreation;
        public $idRoles;

        public function getAllUsers(){
            
        }
    }




















?>
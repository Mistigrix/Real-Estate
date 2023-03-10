<?php 
    require './models/User.php';

    class UserController {
        protected $user;

        public function __construct(){
            $this->user = new User();
        }

        public function getAll() {
            print_r($this->user->getAll());
        }

        public function getOne($pk) {
            echo("ee");
            print_r($this->user->getOne($pk));
        }

        public function create() {
            // TODO: validate request body
            $this->user->create();
        }
    }

?>
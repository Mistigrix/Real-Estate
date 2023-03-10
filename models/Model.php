<?php
    require 'DB.php';

    class Model {
        protected $db;
        protected $table;
        protected $pk = 'id';
        protected $properties;

        public function __construct() {
            $this->db = DB::connexion();
        }

        public function getAll() {
            $query = $this->db->query("SELECT * FROM $this->table");
            $result = $query->fetch_all();
            return $result;
        }

        public function getOne($pk) {
            $query = $this->db->query("SELECT * FROM $this->table WHERE $this->pk=$pk");
            $result = $query->fetch_row();

            return $result;
        }

        public function create() {
            $string_properties = implode(',', $this->properties);
            print($string_properties);
            // $query = $this->db->query("INSERT INTO $this->table(");
        }
    }

?>
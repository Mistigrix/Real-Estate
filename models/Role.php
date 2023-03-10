<?php 

require 'Model.php';

    class Role extends Model {
        protected $table = 'ROLE';
        protected $pk = 'IDROLE';
        protected $properties = ['IDUSER', 'LASTNAMEUSER', 'FIRSTNAMEUSER', 'NUMUSER', 'BIRTHDAYUSER'];
    }
?>
<?php

    require 'Model.php';

    class User extends Model {

        protected $table = 'USERS';
        protected $pk = 'IDUSER';
        protected $properties = ['IDUSER', 'LASTNAMEUSER', 'FIRSTNAMEUSER', 'NUMUSER', 'BIRTHDAYUSER'];
    }

?>
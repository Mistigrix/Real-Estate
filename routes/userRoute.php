<?php 
    require './controllers/UsersController.php';
    require 'Route.php';

    class UserRoute extends Route {
        
        public static function redirectUser($array_uri, $index_navigation) {
            $request_method = $_SERVER['REQUEST_METHOD'];
            $index_navigation ++;
            $uri = $array_uri[$index_navigation];
            
            $user_controller = new UserController();

            if ($uri == 'getAll') {
                $user_controller->getAll();
            } else if($uri == 'getOne') {   
                $index_navigation++;
                $user_controller->getOne($array_uri[$index_navigation]);
            
            } else if ($uri == 'create' && $request_method == 'POST') {
                print_r($_POST);

                //$user_controller->create();
            }
            
            else {
                echo("No Found");
            }
        }
    }

?>
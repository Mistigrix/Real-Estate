<?php


    $array_uri = explode('/', $_SERVER['REQUEST_URI']);
    $index_navigation = 1;

    $uri = $array_uri[$index_navigation];

    if ($uri == 'user') {
        require 'routes/userRoute.php';
        $copy = $array_uri;

        unset($copy[array_search('user', $copy)]);

        UserRoute::redirectUser($copy, $index_navigation);
    } else {
        echo("No found");
    }
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo 'http://localhost:4000/user/create';?>">
  Name: <input type="text" name="name">
  <input type="submit">
</form>
</body>
</html>
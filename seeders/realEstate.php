<?php

// trying connection to database 
try {   
    $mysqli = new mysqli('localhost', 'root', 'rootpassword', 'real_estate');
    echo("Connection to database is succcessfuly\n");
    
} catch(Exception $e) {
    echo ($e);
}
// -----------------------------------------------------------------------
// Add Role
try {
    echo("Deleting all role label ...\n");
    $mysqli->query("DELETE FROM ROLE");

    echo("Adding role ...\n");
    $query_prepare = $mysqli->prepare("INSERT INTO ROLE(IDROLE, LABELROLE)
    VALUES(1, 'user'), (2, 'admin')");

    $query_prepare->execute();
    echo("Roles added !\n");
} catch (Exception $e) {
    echo $e;
}
// -----------------------------------------------------------------------
// Add new user
try {

    echo("Deleting all users ...\n");
    $mysqli->query("DELETE FROM USERS");

    $last_name = "Koffi";
    $first_name = "André Gilbert";
    $role = 2;
    $number = "0787594505";
    $birthday = date('Y-m-d');

    echo("Adding users ...\n");
    $query_prepare = $mysqli->prepare("INSERT INTO USERS(IDUSER , LASTNAMEUSER, FIRSTNAMEUSER, NUMUSER, BIRTHDAYUSER)
    VALUES (1, 'Koffi', 'André Gilbert', '0787494525', '$birthday'),
    (2, 'Touré', 'Salomond', '0394578216', '$birthday')");

    $query_prepare->execute();
    echo("Users added !\n");

} catch (Exception $e) {
    echo $e;
}

// -----------------------------------------------------------------------
// Add role for users

try {
    echo("Deleting all user role ...\n");
    $mysqli->query("DELETE FROM HAVE");

    echo("Adding user roles ...\n");
    $query_prepare = $mysqli->prepare("INSERT INTO HAVE(IDUSER, IDROLE)
    VALUES (1, 2), (2, 1)");

    $query_prepare->execute();
    echo("User roles added !\n");

} catch (Exception $e) {
    echo $e;
}

?>
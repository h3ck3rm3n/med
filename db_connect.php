<?php

function connect(){
    $config = parse_ini_file('/config_db.ini');
    $con = mysqli_connect("localhost",$config['username'],$config['password'],$config['db']);
    if(!$con){
        die("Failed to connect to Database"); 
    }
    return $con;
}




/*
  $polaczenie = @new mysqli('localhost','id7342806_admin_euromed','admin_euromed','id7342806_euromed');

    if(mysqli_connect_errno() != 0){

        echo '<p>Połączenie z bazą nie może zostać nawiązane. Błąd: </p>'.mysqli_connect_error();

    }
*/
?>
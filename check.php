<?php
    ob_start();
    session_start();
    if(empty($_POST['email']) || empty($_POST['password'])){
        header('Location: index.php');
        exit();
    }
     else if($_SESSION['test'] == true){
        header('Location: panel.php');
        exit();
    }
    $nick = $_POST['email'];
    $password = $_POST['password'];

    $nick = htmlentities($nick, ENT_QUOTES, "UTF-8");
    $password = htmlentities($password, ENT_QUOTES, "UTF-8");
    
    require_once "db_connect.php";

    $query = sprintf("SELECT username, password FROM users WHERE username='%s' AND password='%s'",
		mysqli_real_escape_string($polaczenie,$nick),
		mysqli_real_escape_string($polaczenie,$password));

    $zapytanie = mysqli_query($polaczenie,$query);
    $amount_user = mysqli_num_rows($zapytanie);
    
    if($amount_user > 0){
        $_SESSION['email'] = $nick;
        $_SESSION['password'] = $password;
        echo  "<script>window.location.href = 'panel.php';</script>";
    }
    else{
        header('Location: index.php');
        $_SESSION['test'] = true;
        exit();
    }

    mysqli_close($polaczenie);

?>
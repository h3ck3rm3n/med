<?php
    ob_start();
    session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" >
    
    </head>
    
    <body>
        
        <?php
        if(isset($_SESSION['email']) && isset($_SESSION['password'])){
            echo  "<script>window.location.href = 'panel.php';</script>";
        }
        if(!isset($_SESSION['test'])){
        $_SESSION ['test'] = false;
        }
            require_once 'db_connect.php';
        ?>
        <div class="container-fluid">
            <div class="top">
                <div class="container">
                    <img class="img-center" src="img/euromed.png" />
                </div>
            </div>
            <div class="container">
                <div class="login_screen">
                    <p class="log-in">Zaloguj Się</p>
                    <div class="form_log_in">
                        <form action="check.php" method="POST">
                            <div class="email">
                                <label class="text" for="email">E-mail: </label>
                                <input class="input_mail" type="text" name="email" placeholder="Wprowadź swój e-mail" />
                            </div>
                            <div class="password">
                                <label class="text" for="password"> Hasło: </label>
                                <input class="input_password" type="password" name="password" placeholder="Wprowadź hasło" />
                            </div>
                            <div class="submit">
                                <input class="input_submit" type="submit" value="Zaloguj" />
                            </div>
                            
                            <?php
                                
                                if($_SESSION['test'] == true){
                                    echo '<span style="color:red;">Niepoprawna nazwa użytkownika lub hasła! </span>';
                                    unset($_SESSION['test']);
                                }
                            ?>
                            
                        </form>
                    </div>    
                </div>
            </div>
            
        </div>
    <?php
        mysqli_close($polaczenie);    
    ?>
    </body>

</html>
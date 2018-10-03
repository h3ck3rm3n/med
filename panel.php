<?php
    ob_start();
    session_start();

            if(!isset($_SESSION['email']) || !isset($_SESSION['password']))
            {
               header('Location: index.php');
               exit();
            }

?>
<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style_panel.css" >
       
    
    </head>
    
    <body>
        <div class="container-fluid menu-container">
            <nav class="menu">
                <div class="menu_screen">
                    <ul>
                        <li><button class="button_menu">Pacjenci</button>   <!--<button class="patient1" onclick="dropdown()">Pacjenci</button> -->
                            <ul id="patient_ID" class="content">
                                <li>
                                    <a href="formularz_pacjent.php">Dodaj Pacjenta</a>
                                </li>
                                <li>
                                    <a href="#">Wyszukaj Pacjenta</a>
                                </li>
                                <li>
                                    <a href="#">Opcja 3</a>
                                </li>
                                <li>
                                    <a href="#">Opcja 4</a>
                                </li>
                            </ul>
                        </li> 
                        <li><button class="button_menu">Fizjoterapeuci</button>   <!--<button class="physiotherapist1" onclick="dropdown2()">Fizjoterapeuci</button>-->
                            <ul id="physiotherapist_ID" class="content">
                                <li>
                                    <a href="#">Dodaj Fizjoterapeuta</a>
                                </li>
                                <li>
                                    <a href="#">Wyszukaj Fizjoterapeute</a>
                                </li>
                                <li>
                                    <a href="#">Opcja 3</a>
                                </li>
                                <li>
                                    <a href="#">Opcja 4</a>
                                </li>
                            </ul>
                        </li>     
                    </ul>    
                    
                </div>
                 
            </nav>
            <div class="container">
                <div class="reminder">
                    <div class="top_reminder">
                        <h1>Przypomnienie</h1>
                    </div>
                    <div class="content_reminder">

                    </div>
                </div>    

                <div class="side_bar">
                    <div class="user_active">
                        <p style="display:flex; justify-content: center; align-items:center;font-size:0.8vw; font-weight:bold;">Zalogowany jako: <?php echo $_SESSION['email']; ?></p>
                        <a href="logout.php">Wyloguj się!</a>
                    </div>
                    
                </div> 

                <div class="logo">

                </div>
            </div>    
            
        </div>
         <script src="javascript.js"></script>
    </body>

</html>
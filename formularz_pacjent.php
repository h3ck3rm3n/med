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
                                    <a href="#">Dodaj Pacjenta</a>
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
               
                 <div class="form_patient">
                    <div class="form_content">
                        <form class="container_form">
                            <div class="box_form_input">
                                <label for="imie" class="imie">Imie</label> 
                                <input type="text" name="imie" onfocus="sprawdz(this)" onblur="test(this)">
                            </div>
                            <div class="box_form_input">
                                <label for="nazwisko" class="nazwisko">Nazwisko</label>  
                                <input type="text" name="nazwisko" onfocus="sprawdz(this)" onblur="test(this)">
                            </div>
                            <div class="box_form_input">
                                <label for="ulica" class="ulica">Ulica</label> 
                                <input type="text" name="ulica" onfocus="sprawdz(this)" onblur="test(this)">
                            </div>
                            <div class="box_form_input">
                                <label for="nr_bud" class="nr_bud">Numer Budynku</label> 
                                <input type="number" name="nr_bud" onfocus="sprawdz(this)" onblur="test(this)">
                            </div> 
                            <div class="box_form_input">
                                <label for="kod_pocztowy" class="kod_pocztowy">Kod pocztowy</label> 
                                <input type="text" name="kod_pocztowy" onfocus="sprawdz(this)" onblur="test(this)">
                            </div>
                            <div class="box_form_input">
                                <label for="nrtel" class="nrtel">Numer Telefonu</label> 
                                <input type="tel" name="nrtel" onfocus="sprawdz(this)" onblur="test(this)">
                            </div>
                            <div class="box_form_input">
                                <label for="pesel" class="pesel">PESEL</label> 
                                <input type="text" name="pesel" onfocus="sprawdz(this)" onblur="test(this)">
                            </div>
                            <div class="box_form_input_submit">
                                <input type="submit" value="Dodaj Pacjenta">
                            </div>
                        </form>    
                    </div>
                 </div>
                
                <div class="logo">

                </div>
            </div>    
        </div>    
         <script src="javascript.js"></script>
    </body>

</html>
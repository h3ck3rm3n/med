<?php

    $config = parse_ini_file('/config_db.ini');
    $con = mysqli_connect("localhost",$config['username'],$config['password'],$config['db']);
    if(!$con){
        die("Failed to connect to Database"); 
    }
    
    if(!mysqli_select_db{$con, $config}) 
    {
    echo 'DB NOT SELECTED';
    }
    
    $Imie = $_POST['imie'];
    $Nazw = $_POST['nazwisko'];
    $Ulica = $_POST['ulica'];
    $Nr_bud = $_POST['nr_bud'];
    &Kod_poczt = $_POST['kod_pocztowy'];
    $Tel = $_POST['tel'];
    $Pesel = $_POST['PESEL'];
    $Nr_pwz = $_POST['nr_pwz'];
    
    $sql = "INSERT INTO fizjoterapeuci (imie, nazw, ulica, nr_bud, kod_pocztowy, tel, PESEL, nr_pwz) VALUES ($Imie, $Nazw, $Ulica, $Nr_bud, $Kod_poczt, $Tel, $Pesel, $Nr_pwz);"
	
	if(!mysqli_query($con,$sql))
	{
	echo 'Not inserted';
	} else {
	echo 'Inserted';
	}
	
	header('refresh:2; url=formularz_fizjo.php");
?>

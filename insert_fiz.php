<?php

    $config = parse_ini_file('config_db.ini');
    $con = mysqli_connect("localhost",$config['username'],$config['password'],$config['db']);
    if(!$con){
        die("Failed to connect to Database"); 
    }
    
    if(!mysqli_select_db($con, $config['db'])) 
    {
    echo 'DB NOT SELECTED';
    }
    
    $Imie = mysqli_real_escape_string($con, $_POST['imie']);
    $Nazw = mysqli_real_escape_string($con, $_POST['nazw']);
    $Ulica = mysqli_real_escape_string($con, $_POST['ulica']);
    $Nr_bud = mysqli_real_escape_string($con, $_POST['nr_bud']);
    $Kod_poczt = mysqli_real_escape_string($con, $_POST['kod_pocztowy']);
    $Tel = mysqli_real_escape_string($con, $_POST['tel']);
    $Pesel = mysqli_real_escape_string($con, $_POST['PESEL']);
    $Nr_pwz = mysqli_real_escape_string($con, $_POST['nr_pwz']);
    
    $sql = "INSERT INTO fizjoterapeuci (imie, nazw, ulica, nr_bud, kod_pocztowy, tel, PESEL, nr_pwz) VALUES ('$Imie','$Nazw','$Ulica','$Nr_bud','$Kod_poczt','$Tel','$Pesel','$Nr_pwz')";
	if (!mysqli_query($con,$sql)) 
	{
 		die('Error: ' . mysqli_error($con));
  	} else {
		echo 'Inserted';
	}
	$con->close();
	header("refresh:2; url=panel.php");

?>

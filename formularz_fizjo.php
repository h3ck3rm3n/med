<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<div class="container-fluid menu-container">
	<nav class="menu">
		<div class="menu_screen">
			<ul>
				<li><button class="button_menu">Pacjenci</button>   <!--<button class="patient1" onclick="dropdown()">Pacjenci</button> -->

                            <ul id="patient_ID" class="content">
								<li><a href="#">Dodaj Pacjenta</a> </li>
								<li><a href="#">Wyszukaj Pacjenta</a> </li>
								<li><a href="#">Opcja 3</a> </li>
								<li><a href="#">Opcja 4</a> </li>
				</ul>
				</li>
				<li><button class="button_menu">Fizjoterapeuci</button>   <!--<button class="physiotherapist1" onclick="dropdown2()">Fizjoterapeuci</button>-->

                            <ul id="physiotherapist_ID" class="content">
								<li><a href="#">Dodaj Fizjoterapeuta</a> </li>
								<li><a href="#">Wyszukaj Fizjoterapeute</a> </li>
								<li><a href="#">Opcja 3</a> </li>
								<li><a href="#">Opcja 4</a> </li>
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
						<label class="imie" for="imie">Imię</label>
						<input name="imie" onblur="test(this)" onfocus="sprawdz(this)" type="text" />
					</div>
					<div class="box_form_input">
						<label class="nazwisko" for="nazwisko">Nazwisko</label>
						<input name="nazw" onblur="test(this)" onfocus="sprawdz(this)" type="text" />
					</div>
					<div class="box_form_input">
						<label class="ulica" for="ulica">Ulica</label>
						<input name="ulica" onblur="test(this)" onfocus="sprawdz(this)" type="text" />
					</div>
					<div class="box_form_input">
						<label class="nr_bud" for="nr_bud">Numer Budynku</label>
						<input name="nr_bud" onblur="test(this)" onfocus="sprawdz(this)" type="number" />
					</div>
					<div class="box_form_input">
						<label class="kod_pocztowy" for="kod_pocztowy">Kod 
						pocztowy</label>
						<input name="kod_pocztowy" onblur="test(this)" onfocus="sprawdz(this)" type="text" />
					</div>
					<div class="box_form_input">
						<label class="nrtel" for="nrtel">Numer Telefonu</label>
						<input name="tel" onblur="test(this)" onfocus="sprawdz(this)" type="tel" />
					</div>
					<div class="box_form_input">
						<label class="pesel" for="pesel">PESEL</label>
						<input name="PESEL" onblur="test(this)" onfocus="sprawdz(this)" type="text" />
					</div>
					<div class="box_form_input">
						<label class="nr_pwz" for="pesel">Numer PWZ</label>
						<input name="nr_pwz" onblur="test(this)" onfocus="sprawdz(this)" type="text" />
					</div>
					<div class="box_form_input_submit">
						<input type="submit" value="Dodaj Fizjoterapeutę" /> </div>
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

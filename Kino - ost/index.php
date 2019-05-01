<?php
	session_start();
	
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Kino</title>
	<meta name="keywords" content="kino, filmy, recenzje">
	<meta name="author" content="Jan Kowalski">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
		<?php
		
		if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)) {
			include 'menu-zalogowany.php';
		}
		else
			include 'menu.php';
		?>
	
	</header>
	
	<main>
		
		<section class="kino">
		
			<div class="container">
			
				<div class="row">
				
					<div class="bg col-sm-12 col-md-9 col-lg-8 rounded">
					
						<h2> WKRÓTCE NA EKRANIE </h2>
					
						<div id="slides" class="carousel slide" data-ride="carousel">
						
						<ol class="carousel-indicators">
							<li data-target="#slides" data-slide-to="0" class="active"></li>
							<li data-target="#slides" data-slide-to="1"></li>
							<li data-target="#slides" data-slide-to="2"></li>
						</ol>
						  
							<div class="carousel-inner">
						  
								<div class="carousel-item active">
								  <img class="item" src="slides/bogowie.jpg" alt="First slide">
								</div>
							
								<div class="carousel-item">
								  <img class="item" src="slides/lista.jpg" alt="Second slide">
								</div>
								
								<div class="carousel-item">
								  <img class="item" src="slides/shrek.jpg" alt="Third slide">
								</div>
								
							</div>
						
							<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							
							<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						
						</div>
						
						<hr style="background: white;"> 
						
						<h2> AKTUALNOŚCI </h2>
						
						<h4> ZMIANA GODZIN OTWARCIA KINA </h4>
						
						<p>W związku z licznymi prośbami odnośnie wydłużenia godzin otwarcia kina informujemy, że od dnia 5.05 będziemy czekali na Państwa codziennie w godz. 9:00 do końca ostatniego seansu. Jednocześnie godziny otwarcia kawiarni pozostają bez zmian. </p>
						
						<hr style="background: white;"> 
						
						<h4> URODZINY W ARKADII </h4>
						
						<p>Masz urodziny? Spędź je w Arkadii! </br>
						Wszystkie osoby, które odwiedzą nas w dniu swoich urodzin mogą za darmo obejrzeć jeden dowolny film! Osoby towarzyszące solenizantowi mogą nabyć bilety w cenie 8 zł. Wystarczy okazać kasjerowi dokument tożsamości z datą urodzenia i cieszyć się darmowym seansem!</p>
					</div>
					
			
					
					
				</div>
				
			</div>	
				
		</section>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.js"></script>
	
	<script src="js/jquery-1.9.1.min.js"></script>
	
	
	
	
</body>
</html>
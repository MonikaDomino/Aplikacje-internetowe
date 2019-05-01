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
	<link rel="stylesheet" type="text/css"  href="css/lightbox.min.css">
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
					
						<h2> Kawiarnia filmowa </h2>
					
						<p> Miękkie fotele, nastrojowe oświetlenie i muzyka tworzą wyjątkową atmosferę tego miejsca. Każdy gość może spróbować wyśmienitej, świeżo zmielonej kawy, zadowolić żołądek sytym lunchem lub skosztować dobrego ciasta. </br>


						Kawiarnia filmowa to miejsce, gdzie o poranku można poczytać prasę lub popracować, a wieczorem obejrzeć wyjątkową wystawę lub specjalny pokaz na telebimie. </br> </br>
						
						KAWIARNIA FILMOWA jest czynna przez 7 dni w tygodniu od 9.00 - 22.00 </br> </br>

						E-mail-mail: kawiarniafilmowa@kinoarkadia.pl </br> </br>

						Serdecznie zapraszamy!</p>
						
						<hr style="background: white;"> 
						
						<h2> Galeria zdjęć </h2>
						
						<div class="row">
						
							<div class="col-sm-6 col-md-4 col-lg-3 bg">
								<a href="img/1.jpg" data-lightbox="mygallery"><img src="img/1.jpg"></a>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 bg">
								<a href="img/2.jpg" data-lightbox="mygallery"><img src="img/2.jpg"></a>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 bg">
								<a href="img/3.jpg" data-lightbox="mygallery"><img src="img/3.jpg"></a>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 bg">
								<a href="img/4.jpg" data-lightbox="mygallery"><img src="img/4.jpg"></a>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 bg">
								<a href="img/5.jpg" data-lightbox="mygallery"><img src="img/5.jpg"></a>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 bg">
								<a href="img/6.jpg" data-lightbox="mygallery"><img src="img/6.jpg"></a>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 bg">
								<a href="img/7.jpg" data-lightbox="mygallery"><img src="img/7.jpg"></a>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-3 bg">
								<a href="img/8.jpg" data-lightbox="mygallery"><img src="img/8.jpg"></a>
							</div>
							
						</div>
						
					</div>

				</div>
				
			</div>
				
		</section>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
	
</body>
</html>
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
	<link rel="stylesheet" href="css/kontakt.css">
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
					
						<div class="bg col-sm-12">
					
							<h2> Adres </h2>
							
							<p> Kino Arkadia </br>
								ul. Kolorowa </br>
								35-235 Rzeszów </br>
								</br>
								Wszelkich informacji udzielamy pod nr tel: 123 456 789 lub poprzez formularz kontaktowy znajdujący się poniżej. </p>
								
							<p> Kino otwarte jest codziennie od godz. 9:00 do końca ostatniego seansu. </br>
								Kasa biletowa oraz kawiarnia otwarta jest od godz. 9:00 do 22:00 </br>
							 </p>
								
						</div>
						
						<div class="bg col-sm-12">
						
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.547048164061!2d22.00646301571718!3d50.05731587942309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cfb23639a203b%3A0x1ea458103062cba8!2sKolorowa%2C+35-235+Rzesz%C3%B3w!5e0!3m2!1spl!2spl!4v1555167965056!5m2!1spl!2spl" width=100% height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
						
						</div>
						
						<hr style="background: white;"> 
						
						
							<h2> Formularz kontaktowy </h2>
							
							
							
							     <div class="template-content">
								 
									<div class="contact-address">
									
											<div class="inputs">
											
												<div class="input-box">
												
													<div class="input-name">*Imię:</div>
														<div class="input-cntt">
															<input type="text" name="name" value="" class="input-form"  />                
													</div>
														
												</div>
													
												<div class="input-box">
													<div class="input-name">*Nazwisko:</div>
														<div class="input-cntt">
															<input type="text" name="naziwsko" value="" class="input-form"  />                
														</div>
												</div>
													
												<div class="input-box">
													<div class="input-name">*Adres e-mail:</div>
														<div class="input-cntt">
															<input type="text" name="email" value="" class="input-form"  />                
														</div>
												</div>
												
												<div class="input-box">
													<div class="input-name">*Temat:</div>
														<div class="input-cntt">
															<input type="text" name="subject" value="" class="input-form"  />                
														</div>
												</div>
													
												<div class="input-box">
													<div class="input-name">*Treść:</div>
														<textarea name="text" class="textarea" ></textarea>        
												</div>
												
												<div class="input-box">
													<p>* - pole wymagane</p>
														<input type="submit" name="submit" value="Wyślij" class="header-btn-cntr" style="float:left;margin-left:35%;border:0;cursor:pointer;cursor:hand;" />            
												</div>
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
	
</body>
</html>
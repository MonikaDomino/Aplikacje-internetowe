<?php
	session_start();
	if(!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
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
	<link rel="stylesheet" href="css/rejestracja.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
</head>

<body>

	<header>
	
		<?php
		
			include 'menu.php';
		
		?>
	
	</header>
	
	<main>
		
		<section class="kino">
		
			<div class="container">
			
				<div class="row">
				
					<div class="col sm-12 col-md-9 col-lg-8 bg rounded">
					
						<h2> Dziękujemy za rejestrację! Możesz się już zalogować na swoje konto. </h2> 
						
						<h2> Formularz rejestracji </h2>
						
							<p>Rejestracja w systemie konieczna jest do rezerwacji biletów online. Jednocześnie informujemy, że możliwa jest także rezerwacja bezpośrednio w kinie w kasie biletowej. </p>
							
								<form method="post">
								
									<div class="template-content">
										 
										<div class="contact-address">
											
											<div class="inputs">
											
												<div class="input-box">
													<div class="input-name">*Login:</div>
														<div class="input-cntt">
															<input type="text" name="login" value="" class="input-form"  />                
													</div>
													
														<?php
														
															if(isset($_SESSION['e_login']))
															{
																echo '<div class="error">'.$_SESSION['e_login'].'</div>';
																unset($_SESSION['e_login']);
															}
															
														?>
												</div>
													
												<div class="input-box">
													<div class="input-name">*Imię:</div>
														<div class="input-cntt">
															<input type="text" name="imie" value="" class="input-form"  />                
													</div>
													
														<?php
														
															if(isset($_SESSION['e_imie']))
															{
																echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
																unset($_SESSION['e_imie']);
															}
															
														?>
												</div>
													
												<div class="input-box">
													<div class="input-name">*Nazwisko:</div>
														<div class="input-cntt">
															<input type="text" name="nazwisko" value="" class="input-form"  />                
														</div>
														
														<?php
														
															if(isset($_SESSION['e_nazwisko']))
															{
																echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
																unset($_SESSION['e_nazwisko']);
															}
															
														?>
												</div>
													
												<div class="input-box">
													<div class="input-name">*Adres e-mail:</div>
														<div class="input-cntt">
															<input type="text" name="email" value="" class="input-form"  />                
														</div>
														
														<?php
														
															if(isset($_SESSION['e_email']))
															{
																echo '<div class="error">'.$_SESSION['e_email'].'</div>';
																unset($_SESSION['e_email']);
															}
															
														?>
												</div>
												
												<div class="input-box">
													<div class="input-name">*Hasło:</div>
														<div class="input-cntt">
															<input type="password" name="haslo1" value="" class="input-form"  />                
														</div>
														
														<?php
														
															if(isset($_SESSION['e_haslo']))
															{
																echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
																unset($_SESSION['e_haslo']);
															}
															
														?>
												</div>
												
												<div class="input-box">
													<div class="input-name">*Powtórz hasło:</div>
														<div class="input-cntt">
															<input type="password" name="haslo2" value="" class="input-form"  /> 
														</div>
												</div>	
	
												<label>
													</br> <input type="checkbox" name="regulamin"/>Akceptuję regulamin</br>
													
													<?php
														
													if(isset($_SESSION['e_regulamin']))
													{
														echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
														unset($_SESSION['e_regulamin']);
													}
															
													?>
												
												</label>
						
												<div class="g-recaptcha" style="float:left;" data-sitekey="6Lf6ZKAUAAAAAP-hjlcmE_GLy9NuepazFM2M2DvK " ></div>	

													<?php
														
													if(isset($_SESSION['e_bot']))
													{
														echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
														unset($_SESSION['e_bot']);
													}
															
													?>												
												
												<div class="input-box">
													</br>
													<p>* - pole wymagane</p>
														<input type="submit" name="submit" value="Zarejestruj się" class="header-btn-cntr" style="float:left;margin-left:20%;border:0;cursor:pointer;cursor:hand;" />            
												</div>
											</div>

										</div>
							
									</div>
								</form>
								
							<hr style="background: white; clear:both;"> 
								
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
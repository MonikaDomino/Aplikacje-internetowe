<!--Sktypt rejestracji użytkownika -->

<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_ok=true;
		
		//sprawdzenie poprawności loginu
		
		$login = $_POST['login'];
		
		if ((strlen($login)<3) || (strlen($login)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="login musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($login)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		//Sprawdzenie poprawności imienia i nazwiska
		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		
		if ((strlen($imie)<2) || (strlen($imie)>20))
		{
			$wszystko_ok=false;
			$_SESSION['e_imie']="Imię musi posiadać od 2 do 20 znaków. ";
		}
		
		$sprawdz = '/^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/';
		
		if (preg_match($sprawdz, $imie)==false)
		{
			$wszystko_ok=false;
			$_SESSION['e_imie']="Imię może składać się tylko z liter i rozpoczynać od wielkiej litery. Popraw wpisane dane. ";
		}
		
		if ((strlen($nazwisko)<2) || (strlen($nazwisko)>20))
		{
			$wszystko_ok=false;
			$_SESSION['e_nazwisko']="Nazwisko musi posiadać od 2 do 20 znaków. ";
		}
		
		if (preg_match($sprawdz, $nazwisko)==false)
		{
			$wszystko_ok=false;
			$_SESSION['e_nazwisko']="Nazwisko może składać się tylko z liter i rozpoczynać od wielkiej litery. Popraw wpisane dane. ";
		}
		
		
		
		//poprawność adresu e-mail
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_ok = false;
			$_SESSION['e_email'] = "Podaj poprawny adres e-mail!";
		}
		
		//sprawdzenia poprawności hasła
		
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<5) || (strlen($haslo1)>20))
		{
			$wszystko_ok = false;
			$_SESSION['e_haslo'] = "Hasło musi posiadać od 5 do 20 znaków";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_ok = false;
			$_SESSION['e_haslo'] = "Podane hasła nie są takie same!";	
		}
		
		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		
		//Czy zaakceptowano regulamin?
		if(!isset($_POST['regulamin']))
		{
			$wszystko_ok = false;
			$_SESSION['e_regulamin'] = "Potwierdź akceptację regulaminu. ";	
		}
		
		//Sprawdzenie captcha
		
		$secret_key = "6Lf6ZKAUAAAAAHJ7kyh_8kavlx_ztu2yMcAFS6T8";
		
		$sprawdzenie = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
		
		$odpowiedz = json_decode($sprawdzenie);
		
		if ($odpowiedz->success==false)
		{
			$wszystko_ok = false;
			$_SESSION['e_bot'] = "Potwierdź, że nie jesteś robotem! ";	
		}
		
		require_once "connect.php";
		
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			
			if($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email juz istnieje
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
				
				if(!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_ok = false;
					$_SESSION['e_email'] = "Istnieje już konto przypisane do tego adresu email.  ";	
				}	
				
				//Czy login jest juz zajęty
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE login='$login'");
				
				if(!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_loginow = $rezultat->num_rows;
				if($ile_takich_loginow>0)
				{
					$wszystko_ok = false;
					$_SESSION['e_login'] = "Wybrany login jest już zajęty! Wybierz inny. ";	
				}	
				
				if($wszystko_ok==true)
				{
					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$login', '$haslo_hash', '$imie', '$nazwisko', '$email')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: witamy.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
				
				$polaczenie->close();
			}
		}
		catch (Exception $e)
		{
			echo 'Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!';
			echo '</br> Info: '.$e;
			
		}
		
	}	
?>

<!--Właściwy content -->

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
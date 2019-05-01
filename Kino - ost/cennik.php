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
					
						<h2> Aktualne ceny biletów </h2>
						
						<table class="table table-bordered table-condensed">
								
							<thead>
								<tr>
									<th>Rodzaj biletu</th>
									<th>Tani poniedziałek</th>
									<th>Wtorek - Piątek</th>
									<th>Sobota - Niedziela</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>Bilet normalny</td>
									<td>12 zł</td>
									<td>15 zł</td>
									<td>18 zł</td>
								</tr>
								<tr>
									<td>Bilet ulgowy</td>
									<td>10 zł</td>
									<td>13 zł</td>
									<td>16 zł</td>
								</tr>
								
								<tr>
									<td>Bilet normalny 3D</td>
									<td>15 zł</td>
									<td>18 zł</td>
									<td>20 zł</td>
								</tr>
								
								<tr>
									<td>Bilet ulgowy 3D</td>
									<td>13 zł</td>
									<td>15 zł</td>
									<td>18 zł</td>
								</tr>
							</tbody>
						
						</table>
						
						<p>Istnieje możliwość jednorazowego zakupu okularów 3D w cenie 3,50zł, które stają się Państwa własnością!</p>
						
						<p>Uprawnienia do ulgi posiadają uczniowie, studenci, emeryci, renciści oraz posiadacze Karty Dużej Rodziny, za okazaniem dokumentu uprawniającego do ulgi.</p>
						
						<p>Rezerwacje tracą ważność na 10 minut przed seansem. Nieodebrane przed tym czasem bilety trafią do kasy biletowej. </p>
						
						<hr style="background: white;"> 
						
						<h2> Bilety rodzinne </h2>
						
						<table class="table table-bordered table-condensed">
								
							<thead>
								<tr>
									<th>Bilet rodzinny</th>
									<th>Rodzina 2+1*</th>
									<th>Rodzina 2+2*</th>
									<th>Rodzina 2+3*</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>Film 2D</td>
									<td>39 zł</td>
									<td>44 zł</td>
									<td>50 zł</td>
								</tr>
								<tr>
									<td>Film 3D</td>
									<td>42 zł</td>
									<td>52 zł</td>
									<td>60 zł</td>
								</tr>

							</tbody>
						
						</table>
						
						<p> *Dzieci do 15 roku życia <p>
						
						<hr style="background: white;"> 
						
						<h2> Bilety grupowe </h2> 
						
						<table class="table table-bordered table-condensed">
								
							<thead>
								<tr>
									<th>Bilet grupowy</th>
									<th>Grupa 10-14 osób</th>
									<th>Grupa 15-19 osób</th>
									<th>Grupa 20+ osób</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>Film 2D</td>
									<td>11 zł/os.</td>
									<td>10 zł/os.</td>
									<td>8 zł/os.</td>
								</tr>
								<tr>
									<td>Film 3D</td>
									<td>13 zł/os.</td>
									<td>15 zł/os.</td>
									<td>16 zł/os.</td>
								</tr>
							
							</tbody>
						
						</table>
						
						<p> W przypadku grup zorganizowanych wymagana jest wcześniejsza rezerwacja telefoniczna lub online. </p>	
						
						
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
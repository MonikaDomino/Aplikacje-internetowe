<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_ok=true;
		
		//Sprawdź poprawność nickname'a
		$imie = $_POST['imie'];
		
		//Sprawdzenie długości nicka
		if ((strlen($imie)<3) || (strlen($imie)>20))
		{
			$wszystko_ok=false;
			$_SESSION['e_imie']="Imię musi posiadać od 3 do 20 znaków! ";
			header('Location: rejestracja.php');
		}
		
		
		
		if($wszystko_ok==true)
		{
			echo "Udana walidacja!"; exit();
		}
	}	
?>
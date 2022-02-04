<?php
	$conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");

	if ( mysqli_select_db($conn, 'munkahely') ) { 

		$sql = "UPDATE dolgozó SET keresztnev='$_POST[keresztnev]', vezeteknev='$_POST[vezeteknev]', irodaszam='$_POST[irodaszam]', email='$_POST[email]', adoszam='$_POST[adoszam]', telefonszam='$_POST[telefonszam]', szuletesi_datum='$_POST[szuletesi_datum]' WHERE munkahelyi_azonosito = '$_POST[munkahelyi_azonosito]'";

		$res = mysqli_query($conn, $sql) or die ('Hibás utasitás!'); 

		if (mysqli_query($conn, $sql)) {
			header("refresh:3;url=modositas.php");
			echo "Sikeres módosítás!";
		} else {
			echo "Sikertelen módosítás!";
		}

	} else {
		die ('Nem sikerült csatlakozni az adatbázishoz.');
	}
	mysqli_close($conn);
?>
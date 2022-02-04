<?php
	$conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");

	if ( mysqli_select_db($conn, 'munkahely') ) { 

		$sql = "UPDATE nyomtató SET ny_marka='$_POST[ny_marka]', szines='$_POST[szines]' WHERE ny_sorozatszam = '$_POST[ny_sorozatszam]'";

		$res = mysqli_query($conn, $sql) or die ('Hibás utasitás!'); 

		if (mysqli_query($conn, $sql)) {
			header("refresh:3;url=ny_modositas.php");
			echo "Sikeres módosítás!";
		} else {
			echo "Sikertelen módosítás!";
		}

	} else {
		die ('Nem sikerült csatlakozni az adatbázishoz.');
	}
	mysqli_close($conn);
?>
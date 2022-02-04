<?php
$conn = mysqli_connect('localhost', 'root', '') or die ("Hibás utasítás!");

if(mysqli_select_db($conn, 'munkahely')){
	$sql = "DELETE FROM nyomtató WHERE ny_sorozatszam = '" . $_GET["ny_sorozatszam"] . "'";
	$res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

	if(mysqli_query($conn, $sql)){
		echo 'Sikeresen törölve!';
	}else{
		echo 'A törlés nem sikerült!';
	}

}else{
	die('Nem sikerült csatlakozni az adatbázishoz!');
}

header('refresh:5; url=ny_torles.php');
mysqli_close($conn);
?>
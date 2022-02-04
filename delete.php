<?php
$conn = mysqli_connect('localhost', 'root', '') or die ("Hibás utasítás!");

if(mysqli_select_db($conn, 'munkahely')){
	$sql = "DELETE FROM dolgozó WHERE munkahelyi_azonosito = '" . $_GET["munkahelyi_azonosito"] . "'";
	$res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

	if(mysqli_query($conn, $sql)){
		echo 'Sikeresen törölve!';
	}else{
		echo 'A törlés nem sikerült!';
	}

}else{
	die('Nem sikerült csatlakozni az adatbázishoz!');
}

header('refresh:5; url=torles.php');
mysqli_close($conn);
?>
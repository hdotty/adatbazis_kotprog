<?php
	$conn = mysqli_connect('localhost', 'root', '') or die ("Hibás csatlakozás!");
	
	if(mysqli_select_db($conn, 'munkahely')){
		$ny_sorozatszam = $_POST['ny_sorozatszam'];
		$marka = $_POST['marka'];
		$szines = $_POST['szines'];

		
		$sql_sorozatszam = "SELECT * FROM nyomtató WHERE ny_sorozatszam = '$ny_sorozatszam'";
		$res_sorozatszam = mysqli_query($conn, $sql_sorozatszam) or die ('hiba');

		if(mysqli_num_rows($res_sorozatszam) > 0){
			echo 'Ez a a sorozatszám már létezik!';
		}

		if(empty($ny_sorozatszam)){
			echo 'A sorozatszám mezője üres!';
		}

		if(empty($marka)){
			echo 'A márka mezője üres!';
		}

		if(empty($szines)){
			echo 'Az szín mezője üres!';
		}

		if(!empty($ny_sorozatszam) && !empty($marka) && !empty($szines)){

			$sql = "INSERT INTO `nyomtató` (`ny_sorozatszam`, `ny_marka`, `szines`) VALUES ('$ny_sorozatszam', '$marka', '$szines')";

			
			if(!mysqli_query($conn, $sql)) {
            echo 'Nem sikerült feltölteni';
        } else {
        	header("refresh:3;url=nyomtato_be.php");
            echo 'Sikerült feltölteni';
        }
		}

		

	} else {
		die("Nem sikerünt a csatlakozás!");
	}

mysqli_close($conn);

?>
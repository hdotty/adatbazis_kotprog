<?php
	$conn = mysqli_connect('localhost', 'root', '') or die ("Hibás csatlakozás!");
	
	if(mysqli_select_db($conn, 'munkahely')){
		$munk_azon = $_POST['munka'];
		$vnev = $_POST['vezeteknev'];
		$knev = $_POST['keresztnev'];
		$szul_datum = $_POST['szuletesi_datum'];
		$email = $_POST['email'];
		$tel_szam = $_POST['telefonszam'];
		$ado_szam = $_POST['adoszam'];
		$ir_szam = $_POST['irodaszam'];

		$sql_ID="SELECT * FROM dolgozó WHERE munkahelyi_azonosito='$munk_azon'";
		$res_ID=mysqli_query($conn, $sql_ID) or die ('hiba');

		if(mysqli_num_rows($res_ID) > 0){
			echo 'Ez a munkahelyi azonosító már létezik!';
		}

		if(empty($munk_azon)){
			echo 'A munkahelyi azonosító mezője üres!';
		}

		if(empty($vnev)){
			echo 'A vezetéknév mezője üres!';
		}

		if(empty($knev)){
			echo 'A keresztnév mezője üres!';
		}

		if(empty($szul_datum)){
			echo 'A dátum mezője üres!';
		}

		$sql_email = "SELECT * FROM dolgozó WHERE email = '$email'";
		$res_email = mysqli_query($conn, $sql_email);

		if(mysqli_num_rows($res_email) > 0){
			echo 'Ez az email-cím már foglalt!';
		}

		if(empty($email)){
			echo 'Az email-cím mezője üres!';
		}

		$sql_tel = "SELECT * FROM dolgozó WHERE telefonszam = '$tel_szam'";
		$res_tel = mysqli_query($conn, $sql_tel);

		if(mysqli_num_rows($res_tel) > 0){
			echo 'Ez a telefonszám már foglalt!';
		}

		if(empty($tel_szam)){
			echo 'A telefonszám mezője üres!';
		}

		$sql_ado = "SELECT * FROM dolgozó WHERE adoszam = '$ado_szam'";
		$res_ado = mysqli_query($conn, $sql_ado);

		if(mysqli_num_rows($res_ado) > 0){
			echo 'Ez az adószám már foglalt!';
		}

		if(empty($ado_szam)){
			echo 'Az adószám mezője üres!';
		}

		$sql_iroda = "SELECT * FROM dolgozó WHERE irodaszam = '$ir_szam'";
		$res_iroda = mysqli_query($conn, $sql_iroda);

		if(mysqli_num_rows($res_iroda) > 0){
			echo 'Ez az iroda már foglalt!';
		}

		if(empty($ir_szam)){
			echo 'Az irodaszám mezője üres!';
		}

		

		if(!empty($munk_azon)  && !empty($vnev) && !empty($knev) && !empty($szul_datum) && !empty($email) && !empty($tel_szam) && !empty($ado_szam) && !empty($ir_szam) && mysqli_num_rows($res_iroda) <= 0){

			$sql = "INSERT INTO dolgozó (munkahelyi_azonosito, keresztnev, vezeteknev, irodaszam, email, adoszam, telefonszam, szuletesi_datum) VALUES ('$munk_azon', '$knev', '$vnev', '$ir_szam', '$email', '$ado_szam', '$tel_szam', '$szul_datum')";
		}

		if(!mysqli_query($conn, $sql)) {
            echo 'Nem sikerült feltölteni';
        } else {
        	header("refresh:3;url=dolgozo_be.php");
            echo 'Sikerült feltölteni';
        }

	} else {
		die("Nem sikerünt a csatlakozás!");
	}

mysqli_close($conn);

?>
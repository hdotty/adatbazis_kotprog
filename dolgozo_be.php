<?php
	$conn = mysqli_connect('localhost', 'root', '') or die ("Hibás csatlakozás!");
	if( mysqli_select_db($conn, 'munkahely')){

			$sql1 = 'SELECT irodaszam FROM helyiség GROUP BY irodaszam';
			$res1 = mysqli_query($conn, $sql1) or die ('Hibás utasítás!');

	} else {
		die("Nem sikerünt a csatlakozás!");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Dolgozó felvétele</title>

	<style type="text/css">
		.button {
  		background-color: #003333;
  		border: none;
  		color: white;
  		padding: 20px 20px;
  		text-align: center;
  		text-decoration: none;
  		display: inline-block;
  		font-size: 20px; 
  		width: 250px;
  		height: 100px;
		}

		.center {
		position: absolute;
    	top: 50%;
   		left: 50%;
   		transform: translate(-50%, -50%);
		}

		.betuk{
		font-size: 20px;
		font-family: Arial;
		font-color: grey;
		}

		ul{
  			list-style-type: none;
  			margin: 0;
  			padding:0;
  			overflow: hidden;
  			background-color: #003333;
  		}

  		li{
  			float: left;
  		}

  		li a{
  			font-family: Arial, Helvetica, sans-serif;
  			display: block;
  			color: #cccccc;
  			text-align: center;
  			padding: 14px 16px;
  			text-decoration: none;
  		}

	</style>

</head>
<body style="background-color: #cccccc">

	<ul class="nav">
			<li><a href="index.php">Kezdőlap</a></li>
			<li><a href="dolgozo_ki.php">Dolgozók</a></li>
			<li><a href="dolgozo_be.php">Felvétel</a></li>
			<li><a href="modositas.php">Módosítás</a></li>
			<li><a href="torles.php">Törlés</a></li>
	</ul>

	<br><br>

	<form action="insert.php" method="post" class = "center betuk">
		<label>Munkahelyi azonosító</label>
		<input type="text" name = munka><br><br>

		<label>Vezetéknév</label>
		<input type="text" name = vezeteknev><br><br>

		<label>Keresztnév</label>
		<input type="text" name = keresztnev><br><br>

		<label>Születési dátum</label>
		<input type="date" name = szuletesi_datum><br><br>

		<label>Email</label>
		<input type="text" name = email><br><br>

		<label>Telefonszám</label>
		<input type="text" name = telefonszam><br><br>

		<label>Adószám</label>
		<input type="text" name = adoszam><br><br>

		<label>Irodaszám</label>
		<div>
			<select name = "irodaszam">
				<?php
					while(($current_row = mysqli_fetch_assoc($res1)) != null){
				?>
						<option value = "<?=$current_row["irodaszam"]?>"><?=$current_row["irodaszam"]?></option>
				<?php
					}
				?>
			</select>
		</div>

<br> <br> <br> <br>
		<input type = "submit" value="Küldés" class="button">
</body>

<?php
mysqli_free_result($res1);
?>

</html>



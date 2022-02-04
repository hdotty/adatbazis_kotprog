<?php
	$conn = mysqli_connect('localhost', 'root', '') or die ("Hibás csatlakozás!");
	if( mysqli_select_db($conn, 'munkahely')){
	} else {
		die("Nem sikerünt a csatlakozás!");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Új nyomtató</title>

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
			<li><a href="nyomtato_ki.php">Nyomtatók</a></li>
			<li><a href="nyomtato_be.php">Felvétel</a></li>
			<li><a href="ny_modositas.php">Módosítás</a></li>
			<li><a href="ny_torles.php">Törlés</a></li>
	</ul>

	<br><br>

	<br><br>

	<form action="ny_insert.php" method="post" class = "center betuk">
		<label>Nyomtató sorozatszáma</label>
		<input type="number" name = ny_sorozatszam><br><br>

		<label>Márka</label>
		<input type="text" name = marka><br><br>

		<label>Színes</label>
		<input type="text" name = szines><br><br>

<br> <br> <br> <br>
		<input type = "submit" value="Küldés" class="button">
	</form>
</body>
</html>

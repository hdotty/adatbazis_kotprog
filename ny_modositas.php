<?php
	$conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");

	if ( mysqli_select_db($conn, 'munkahely') ) { 

		$sql = "SELECT * FROM nyomtató";

		$res = mysqli_query($conn, $sql) or die ('Hibás utasitás!'); 

	} else {
		die ('Nem sikerült csatlakozni az adatbázishoz.');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Módosítás</title>
	<style type="text/css">
		#table {
  		font-family: Arial, Helvetica, sans-serif;
  		border-collapse: collapse;
  		width: 100%;
		}

		#table td, #table th {
 		border: 1px solid #ddd;
  		padding: 8px;
		}

		#table th {
  		padding-top: 12px;
  		padding-bottom: 12px;
  		text-align: left;
 		background-color: #003333;
  		color: #cccccc;
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

<body>
	<ul class="nav">
			<li><a href="index.php">Kezdőlap</a></li>
			<li><a href="nyomtato_ki.php">Dolgozók</a></li>
			<li><a href="nyomtato_be.php">Felvétel</a></li>
			<li><a href="ny_modositas.php">Módosítás</a></li>
			<li><a href="ny_torles.php">Törlés</a></li>
	</ul>

	<br><br>

	<table id="table">
		<tr>
			<th>Sorozatszám</th>
			<th>Márka</th>
			<th>Színes</th>
			<th></th>
			
		</tr>

	<?php
		while ($row = mysqli_fetch_array($res)) {
			echo "<tr><form action=ny_update.php method=post>";
			echo "<input type=hidden name=ny_sorozatszam value='" . $row['ny_sorozatszam'] . "'>";
			echo "<td>".$row['ny_sorozatszam']."</td>";
			echo "<td><input type=text name=ny_marka value='". $row['ny_marka']."'></td>";
			echo "<td><input type=text name=szines value='". $row['szines']."'></td>";
			echo "<td><input type=submit>";
			echo "</form></tr>";
		}
	?>

</table>
</body>

<?php
	mysqli_free_result($res);
	mysqli_close($conn);
?>


</html>

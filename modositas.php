<?php
	$conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");

	if ( mysqli_select_db($conn, 'munkahely') ) { 

		$sql = "SELECT * FROM dolgozó";

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
			<li><a href="dolgozo_ki.php">Dolgozók</a></li>
			<li><a href="dolgozo_be.php">Felvétel</a></li>
			<li><a href="modositas.php">Módosítás</a></li>
			<li><a href="torles.php">Törlés</a></li>
	</ul>

	<br><br>

	<table id="table">
		<tr>
			<th>Munkahelyi azonosító</th>
			<th>Vezetéknév</th>
			<th>Keresztnév</th>
			<th>Születési dátum</th>
			<th>Irodaszám</th>
			<th>Email</th>
			<th>Telefonszám</th>
			<th>Adószám</th>
			<th></th>
			
		</tr>

	<?php
		while ($row = mysqli_fetch_array($res)) {
			echo "<tr><form action=update.php method=post>";
			echo "<input type=hidden name=munkahelyi_azonosito value='" . $row['munkahelyi_azonosito'] . "'>";
			echo "<td>".$row['munkahelyi_azonosito']."</td>";
			echo "<td><input type=text name=vezeteknev value='". $row['vezeteknev']."'></td>";
			echo "<td><input type=text name=keresztnev value='". $row['keresztnev']."'></td>";
			echo "<td><input type=date name=szuletesi_datum value='". $row['szuletesi_datum']."'></td>";
			echo "<input type=hidden name=irodaszam value='". $row['irodaszam']."'>";
			echo "<td>".$row['irodaszam']."</td>";
			echo "<td><input type=text name=email value='". $row['email']."'></td>";
			echo "<td><input type=number name=telefonszam value='". $row['telefonszam']."'></td>";
			echo "<td><input type=number name=adoszam value='". $row['adoszam']."'></td>";
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

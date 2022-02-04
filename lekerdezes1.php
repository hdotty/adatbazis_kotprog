<?php
	$conn = mysqli_connect('localhost', 'root', '') or die ("Hibás csatlakozás!");
	if( mysqli_select_db($conn, 'munkahely')){
		$sql = "SELECT számítógép.sorozatszam, számítógép.marka, nyomtató.szines FROM számítógép, nyomtató WHERE számítógép.ny_sorozatszam=nyomtató.ny_sorozatszam AND számítógép.gyartasi_ev='2013' AND nyomtató.szines='IGEN'";
		$res = mysqli_query($conn, $sql) or die ('Hibás utasitás!');

	} else {
		die("Nem sikerünt a csatlakozás!");
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Első lekérdezés</title>
	<style type="text/css">
		#table {
  		font-family: Arial, Helvetica, sans-serif;
  		border-collapse: collapse;
  		width: 60%;
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
			<li><a href="lekerdezes1.php">Első lekérdezés</a></li>
			<li><a href="lekerdezes2.php">Második lekérdezés</a></li>
			<li><a href="lekerdezes3.php">Harmadik lekérdezés</a></li>
	</ul>

	<br><br>

	<p>Kiírja azokat a számítógépeket, amiket 2013-ban gyártottak, és színes nyomtatójuk van. </p>

<table id="table">
		<tr>
			<th>Számítógép sorozatszáma</th>
			<th>Számítógép márkája</th>
			<th>Színes a nyomtató?</th>
		</tr>

		<?php
		while ( ($current_row = mysqli_fetch_assoc($res))!= null) {
			?>
        <tr>
        	<td><?php echo $current_row["sorozatszam"]; ?></td>
        	<td><?php echo $current_row["marka"]; ?></td>
        	<td><?php echo $current_row["szines"]; ?></td>
        </tr>
    <?php
		}
	?>

    </table>
</body>

<?php
	mysqli_free_result($res);
	mysqli_close($conn);
?>

</html>
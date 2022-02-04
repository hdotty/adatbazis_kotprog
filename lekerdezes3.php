<?php
	$conn = mysqli_connect('localhost', 'root', '') or die ("Hibás csatlakozás!");
	if( mysqli_select_db($conn, 'munkahely')){
		$sql = "SELECT COUNT(dolgozó.munkahelyi_azonosito) FROM dolgozó, helyiség, számítógép WHERE dolgozó.irodaszam=helyiség.irodaszam AND számítógép.irodaszam=helyiség.irodaszam AND számítógép.gyartasi_ev>='2017'";
		$res = mysqli_query($conn, $sql) or die ('Hibás utasitás!');

		$result = mysqli_fetch_array($res);
	} else {
		die("Nem sikerünt a csatlakozás!");
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Harmadik lekérdezés</title>
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

	<p>Megszámolja, hogy hány olyan dolgozó van, akinek 2017-es vagy fiatalabb gyártású számítógépe van.</p>

	<?php echo $result[0]; ?>
</body>

<?php
	mysqli_free_result($res);
	mysqli_close($conn);
?>

</html>
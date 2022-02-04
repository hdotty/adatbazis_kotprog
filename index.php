<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KEZDŐLAP</title>

	<style>
	.button {
  	background-color: #404040;
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

	.link{
		text-decoration: none;
		color: white;
	}
	</style>

</head>
<body style="background-color: #003333">
	<div class="center">
		<button class = "button"><a href = "./dolgozo_ki.php" class="link">Dolgozók</a></button>
		<br> <br> <br>
		<button class = "button"><a href = "./helyiseg_ki.php" class="link">Irodahelyiségek</a></button>
		<br> <br> <br>
		<button class = "button"><a href = "./szamitogep_ki.php" class="link">Számítógépek</a></button>
		<br> <br> <br>
		<button class = "button"><a href = "./nyomtato_ki.php" class="link">Nyomtatók</a></button>
		<br> <br> <br>
		<button class = "button"><a href = "./lekerdezes1.php" class="link">Lekérdezések</a></button>



	</div>

</body>
</html>
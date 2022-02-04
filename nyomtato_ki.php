<?php
    $conn = mysqli_connect('localhost', 'root', '') or die ("Hibás csatlakozás!");
    if( mysqli_select_db($conn, 'munkahely')){
        $sql = 'SELECT * FROM nyomtató';
        $res = mysqli_query($conn, $sql) or die ('Hibás utasitás!');

    } else {
        die("Nem sikerünt a csatlakozás!");
    }
    
?>


<!DOCTYPE html>
<html>
<head>
	<title>Nyomtatók</title>
    <style type="text/css">
        #table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 70%;
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
            <li><a href="nyomtato_ki.php">Nyomtatók</a></li>
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
        </tr>

        <?php
        while ( ($current_row = mysqli_fetch_assoc($res))!= null) {
            ?>
        <tr>
            <td><?php echo $current_row["ny_sorozatszam"]; ?></td>
            <td><?php echo $current_row["ny_marka"]; ?></td>
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
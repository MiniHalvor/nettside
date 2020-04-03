<!doctype html>
<html>
	<head>
		<title> Hovedside </title>
		<link rel="stylesheet" href="css/gjennom.css">
		<meta charset= "UTF-8">
		<link rel="shortcut icon" href="logoer/favicon.ico">
	</head>
	<body>
		<script>
		$(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
            $(this).find("a").html("<i class='fas fa-bars'></i>");
        } else {
            $(".item").addClass("active");
            $(this).find("a").html("<i class='fas fa-times'></i>");
        }
    });
});
</script>
		<nav>
		  <ul class="menu">
			<li class="logo"><a href="../Nettside/index1.html">Hovedside</a></li>
			<li class="item"><a href="index.php">Hjem</a></li>
			<li class="item"><a href="dykk.php">Dykk</a></li>
			<li class="item"><a href="tilfeldig.php">Tilfeldig Dykker</a></li>
			<li class="item"><a href="gjennom.php">Gjennomsnittlige Dykk</a></li>
			<li class="item"><a href="flest.php">Flest Dykk</a></li>
			<li class="item"><a href="dypest.php">Dypeste Dykk</a>
			</li>
			<li class="item button"><a href="#">Logg Inn</a></li>
			<li class="item button secondary"><a href="#">Lag konto</a></li>
			<li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
		  </ul>
		</nav>
		<?php
		include 'db_connection.php';

		$conn = OpenCon();

		echo "Connected Successfully<br>";


		$sql = "SELECT round(AVG( luftforbruk )) AS luftforbruk, round(AVG( dybde )) AS dybde FROM dykk";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			
				
				$row= mysqli_fetch_array($result);
				echo "Den gjennomsnittlige dykkedybden er ".$row['dybde']." meter og det gjennomsnittlige luftforbruket er ".$row['luftforbruk']." liter<br>
				Akkurat nå er det ... Som har flest dykk, han har dykket ... ganger<br>
				Rekorden for det dypeste dykket er holdt av ...";}
				
				
		 else {
			echo "0 results";
		}


		CloseCon($conn);
		?>
	<body>
</html>
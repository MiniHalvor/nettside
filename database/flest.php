<!doctype html>
<html>
	<head>
		<title> Hovedside </title>
		<link rel="stylesheet" href="css/flest.css">
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
		
		?>
	<body>
</html>
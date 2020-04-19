<!doctype html>
<html>
	<head>
		<title> Hovedside </title>
		<link rel="stylesheet" href="css/medlemsliste.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<meta charset= "UTF-8">
		<link rel="shortcut icon" href="logoer/favicon.ico">
	</head>
	<body>
		
		<nav class="navbar nav-bg">
		<ul class="nav menu ">
            <li class="nav-item">
                <a class="nav-link active" href="http://klasserom.net/208/elev20821/it1/index1.html">Hovedside</a>
			</li>
		</ul>
		<ul class="nav menu  justify-content-end">
            
            <li class="nav-item">
                <a class="nav-link" href="index.php">Hjem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dykk.php">Dykkeliste</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="medlemsliste.php">Medlemsliste</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="statistikk.php">Statistikk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registrer.php">Registrer dykker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.php">Søk</a>
            </li>
         
        </ul>
		</nav>
		<div class="container-fluid ">
		<div class="row m-5" style="justify-content:center;">
		<h1>Medlemsliste</h1>
		</div>
		<div class="row mb-5">
		<?php
		include 'db_connection.php';

		$conn = OpenCon();

		


		$sql = "SELECT fornavn, etternavn, medlemSiden FROM dykker";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			
				
				
				echo "<table>";
				echo "<tr><th>"."Fornavn"."</th><th>"."Etternavn"."</th><th>"."Medlem siden"."</th><tr>";

				while($row = $result->fetch_assoc()) {

				echo 
				"<tr><td>"
				.$row['fornavn'].
				"</td><td>"
				.$row['etternavn'].
				"</td><td>"
				.$row['medlemSiden'].
				
				"</td></tr>";

				}
				echo "</table>";}
				
				
		 else {
			echo "0 results";
		}


		CloseCon($conn);
		?>
		</div>
		</div>
		
	<body>
</html>
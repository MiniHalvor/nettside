<!doctype html>
<html>
	<head>
		<title> Dykking </title>
		<link rel="stylesheet" href="css/dykk.css">
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
		<h1>Dykkeliste</h1>
		</div>
		<div class="row mb-5">
		<?php
		include 'db_connection.php';

		$conn = OpenCon();

		


		$sql = "SELECT dykkID, dato, sted, dybde, luftforbruk, kommentarer, fornavn, etternavn, medlemSiden, kategori\n"

		. "FROM dykk, dykker, sikt\n"

		. "WHERE dykk.dykkerID=dykker.dykkerID AND dykk.siktID=sikt.siktID  \n"

		. "ORDER BY `dykk`.`dykkID` ASC";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			
				
				
				echo "<table>";
				echo "<tr><th>"."Navn"."</th><th>"."Dybde"."</th><th>"."Luftforbruk"."</th><th>"."Sted"."</th><th>"."Dato"."</th><th>"."Sikt"."</th><th>"."Kommentarer"."</th></tr>";

				while($row = $result->fetch_assoc()) {

				echo 
				"<tr><td>"
				.$row['fornavn']." ".$row['etternavn'].
				"</td><td>"
				.$row['dybde'].
				"</td><td>"
				.$row['luftforbruk'].
				"</td><td>"
				.$row['sted'].
				"</td><td>"
				.$row['dato'].
				"</td><td>"
				.$row['kategori'].
				"</td><td>"
				.$row['kommentarer'].
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
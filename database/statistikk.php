<!doctype html>
<html>
	<head>
		<title> Hovedside </title>
		<link rel="stylesheet" href="css/statistikk.css">
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
		<div class="row m-5" style="justify-content:center;"><h1>Statistikk</h1></div>
		<div class="row" style="justify-content:center;">
		<div class="col-6 p-0"> 
		<img src="bilder/Dykker0.jpg" alt="Bilde av flere dykkere" class="img-fluid">
		</div>
		<div class="col-6 info-text">
		<?php
		include 'db_connection.php';

		$conn = OpenCon();

		


		$sql = "SELECT round(AVG( luftforbruk )) AS luftforbruk, round(AVG( dybde )) AS dybde FROM dykk";
		
		$result = $conn->query($sql);
		

		if ($result->num_rows > 0) {
			// output data of each row
			
			$row= mysqli_fetch_array($result);
			$avgdybde=$row['dybde'];
			$avgluft=$row['luftforbruk'];
		}
		
		$sql = "select dykker.fornavn as fornavn, dykker.etternavn as etternavn, count(dykk.dykkID) as occurences\n"

				. "from dykker\n"

				. "inner join dykk\n"

				. "on dykk.dykkerID = dykker.dykkerID\n"

				. "group by dykker.dykkerID\n"

				. "order by occurences DESC\n"

				. "limit 1";
							
		if($result->num_rows > 0) {
			$result = $conn->query($sql);
		
			$row= mysqli_fetch_array($result);
			$fornavn=$row['fornavn'];
			$etternavn=$row['etternavn'];
			$dykk=$row['occurences'];
		}
		$sql = "SELECT dykk.dykkerID, dykker.fornavn as fornavnDybde, dykker.etternavn as etternavnDybde, dybde FROM dykk inner join dykker on dykk.dykkerID=dykker.dykkerID ORDER BY dybde DESC LIMIT 1";
							
		if($result->num_rows > 0) {
			$result = $conn->query($sql);
		
			$row= mysqli_fetch_array($result);
			$fornavnDybde=$row['fornavnDybde'];
			$etternavnDybde=$row['etternavnDybde'];
			$dykkDybde=$row['dybde'];
		}

		echo "Den gjennomsnittlige dykkedybden er $avgdybde meter og det gjennomsnittlige luftforbruket er $avgluft liter.<br><br>
		Akkurat nå er det $fornavn $etternavn som har flest dykk, han har dykket $dykk ganger.<br><br>
		Rekorden for det dypeste dykket er holdt av $fornavnDybde $etternavnDybde, hun dykket $dykkDybde meter dypt.";


		CloseCon($conn);
		?>
		</div>
		</div>
		
		
		
	</body>
</html>
<!doctype html>
<html>
	<head>
		<title> Hovedside </title>
		<link rel="stylesheet" href="css/search.css">
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
		<div class="row m-5" style="justify-content:center;"><h1>Søk</h1></div>
		<div class="row" style="justify-content:center;">
	
		<form action="result.php" method="POST">
		
		  <div class="form-group">
			<label for="fornavn">Fornavn</label>
			<input type="text" class="form-control" id="fornavn"  placeholder="Fornavn" name="fornavn" required>
		  </div>
		  
		  <div class="form-group">
			<label for="etternavn">Etternavn</label>
			<input type="text" class="form-control" id="etternavn" placeholder="Etternavn" name="etternavn">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Søk</button>
		</form>
		</div>
		</div>
		<?php
		 
		?>
	<body>
</html>
<!doctype html>
	<html>
		<head>
			<title>JUL</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="css/ønskeliste.css">
			<meta charset= "UTF-8">
			<link rel="shortcut icon" href="logoer/favicon.ico">
		</head>
		<body>
			<div class="header">
				<h1>Nissens ønskeliste<h1>
			</div>
			<div class="sidenav">
				<div class="boks">
					<a href=index1.html>
						<div class="tilpasser">
						Tilbake til hovedsiden
						</div>
					</a>
					
					<a href=Jul.html>
						<div class="tilpasser">
						Julesiden
						</div>
					</a>
					<a href=nedtelling.php>
						<div class="tilpasser">
						Nedtelling til julaften
						</div>
					</a>
					<a href=juletest.php>
						<div class="tilpasser">
						Juletest
						</div>
					</a>
					<a href=ønskeliste.php>
						<div class="tilpasser1">
						Ønskeliste
						</div>
					</a>
					<a href=julekalender.html>
						<div class="tilpasser">
						Julekalender
						</div>
					</a>
					<a href=prosjektbeskrivelse.html>
						<div class="tilpasser">
						Prosjekt- beskrivelse
						</div>
					</a>
				</div>
			</div>
			
			<div class="main">
				<center>
				<form action="ønskemottak.php" method="post">
				Hva heter du?<br><input type="text" name="navn" required ><br><br>
				Hva ønsker du deg til jul? <br><input required type="text" name="ønske" placeholder="Skriv inn f.eks Sokker, ullundertøy eller votter"><br><br>
				Hva er adressen din?<br><input required type="text" name="adresse">
				<br>
				<input type="submit">
				</form>
				</center>
			</div>			
		</body>
	</html>
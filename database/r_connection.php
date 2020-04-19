<!doctype html>
<html>
	<head>
		<title> Hovedside </title>
		<link rel="stylesheet" href="css/registrer.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500&display=swap" rel="stylesheet">
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
		
<?php
 $sqlserver = "MySQL.klasserom.net";
 $sqluser = "knet-elev20821";
 $sqlpass = "okf47";
 $sqldb = "knet-elev20821";

// Create connection
$conn = new mysqli($sqlserver, $sqluser, $sqlpass, $sqldb);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fornavn = $_POST['fornavn'];
$etternavn = $_POST['etternavn'];
date_default_timezone_set("cet");
$dato = date("Y-m-d");

$sql = "INSERT INTO dykker (fornavn, etternavn, medlemSiden)
VALUES ('$fornavn', '$etternavn', '$dato')";

if ($conn->query($sql) === TRUE) {
	echo '<center><div class="registrert">';
    echo "Gratulerer, " . $fornavn ." ". $etternavn. " har blitt registrert i vår database.";
		echo '</div></center>';
		
		
} else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
?>

	<body>
</html>
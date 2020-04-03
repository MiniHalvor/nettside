<!doctype html>
<html>


  <head>

	<title> Hei! </title>
	<link rel="stylesheet" href="css/index.css">
	<meta charset= "UTF-8">
	<link rel="shortcut icon" href="logoer/favicon.ico">
	
	
  </head>


	<body>
		
		
	  <div class="sidenav">
		<a href=index1.html>Hjem</a>
		<p></p>
		<a href=internett.html>Internett</a>
		<p></p>
		<a href=utfordring.html>Utfordring</a>
		<p></p>
		<a href=snake.html>Snake</a>
		<p></p>
		<a href=pong.html>Pong</a>
		<p></p>
		<a href=test.html>Test</a>
		<p></p>
		<a href=lokale.html>Leie lokale</a>
		<p></p>
		<a href=flexbox.html>Flexbox</a>
		<p></p>
		<a href=jul.html>Juleoppgave</a>
		
	  </div>


	  <div class="main">
		<center>
			<?php
			$x1 = $_POST['x1'];
            $y1 = $_POST['y1'];
            $x2 = $_POST['x2'];
            $y2 = $_POST['y2'];
			$tx = $x2 / $x1 ;
			$ty = $y2 / $y1 ;
            
			echo "x1=$x1 , y1=$y1 , x2=$x2 , y2=$y2 , tx=$tx , ty=$ty" ;
			if ($x1==0) {echo "<br><br>Å dele på null er bare tull";}
			elseif ($y1==0) {echo "<br><br>Å dele på null er bare tull";}
			elseif ($tx  == $ty ) {
			echo "<br><br><br>PARALLELL";
			} else { echo "<br><br><br>IKKE PARALLELL";} 
			
			
			
			?>
		</center>
	  </div>

	</body>


</html>
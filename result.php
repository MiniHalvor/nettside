<!DOCTYPE html>

<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>Juletest</title>
	
	<link rel="stylesheet" type="text/css" href="css/result.css" />
	
</head>
 
<body>
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
						<div class="tilpasser1">
						Juletest
						</div>
					</a>
					<a href=ønskeliste.php>
						<div class="tilpasser">
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
	<div id="pagewrap">
 
		<h1>Resultat</h1>
		
        <?php
            $svar1 = $_POST['question-1-answers'];
            $svar2 = $_POST['question-2-answers'];
            $svar3 = $_POST['question-3-answers'];
            $svar4 = $_POST['question-4-answers'];
            $svar5 = $_POST['question-5-answers'];
        
            $totalkorrekt = 0;
            
            if ($svar1 == "D") { $totalkorrekt++; };
			if ($svar1 == "B") { $totalkorrekt++; };
            if ($svar2 == "A") { $totalkorrekt++; };
            if ($svar3 == "B") { $totalkorrekt++; };
            if ($svar4 == "C") { $totalkorrekt++; };
            if ($svar5 == "G") { $totalkorrekt++; };
			
            echo "<div id='dinesvar'><ul><li>Spørsmål 1: Du svarte $svar1. Riktig svar var B eller D</li></div>";
			echo "<div id='dinesvar'><li>Spørsmål 2: Du svarte $svar2. Riktig svar var A</li></div>";
			echo "<div id='dinesvar'><li>Spørsmål 3: Du svarte $svar3. Riktig svar var B</li></div>";
			echo "<div id='dinesvar'><li>Spørsmål 4: Du svarte $svar4. Riktig svar var C</li></div>";
			echo "<div id='dinesvar'><li>Spørsmål 5: Du svarte $svar5. Riktig svar var G</li></ul></div>";
            echo "<div id='results'>$totalkorrekt / 5 Riktige svar</div>";
            
			if ($totalkorrekt=="5") echo '<img src="bilder/5.jpg" alt="wow, good job" style="width:300px;height:auto;"/>';
			else if ($totalkorrekt=="4") echo '<img src="bilder/4.jpg" alt="So close, we were so close" style="width:300px;height:auto;" />';
			else if ($totalkorrekt=="3") echo '<img src="bilder/3.png" alt="average" style="width:300px;height:auto;"/>';
			else if ($totalkorrekt=="2") echo '<img src="bilder/2.png" alt="wow, good job" "width:300px;height:auto;"/>';
			else if ($totalkorrekt=="1") echo '<img src="bilder/1.png" alt="wow, good job" "width:300px;height:auto;"/>';
        ?>
	
	</div>
 
</body>
 
</html>
<!doctype html>
	<html>
		<head>
			<title>JUL</title>
			<link rel="stylesheet" href="css/juletest.css">
			<meta charset= "UTF-8">
			<link rel="shortcut icon" href="logoer/favicon.ico">
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
			<div id="page-wrap">
				<div class="header">
					<h1>Juletest</h1>
				</div>	
				<form action="result.php" method="post" id="quiz" >
					<ol>
						<li>
							<h3>Jula er...</h3>
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"required />
								<label for="question-1-answers-A">A) Kjedelig </label>
							</div>
							
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
								<label for="question-1-answers-B">B) Helt ok</label>
							</div>
							
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
								<label for="question-1-answers-C">C) Forferdelig</label>
							</div>
							
							<div>
								<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
								<label for="question-1-answers-D">D) Det beste som finnes</label>
							</div>
						</li>
						
						<li>
							<h3>Julenissen bor på...</h3>
							<div>
								<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required />
								<label for="question-2-answers-A">A) Nordpolen</label>
							</div>
							
							<div>
								<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
								<label for="question-2-answers-B">B) Sørpolen</label>
							</div>
							
							<div>
								<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
								<label for="question-2-answers-C">C) Vestpolen</label>
							</div>
							
							<div>
								<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
								<label for="question-2-answers-D">D) Østpolen</label>
							</div>
						</li>
						
						<li>
							<h3>Har du vært snill i år?</h3>
							<div>
								<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A"required />
								<label for="question-3-answers-A">A) Ja</label>
							</div>
							
							<div>
								<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
								<label for="question-3-answers-B">B) Nei</label>
							</div>
							
						</li>
						
						<li>
							<h3>Hvor mange reinsdyr har julenissen?</h3>
							
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A"required />
								<label for="question-4-answers-A">A) 7</label>
							</div>
							
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
								<label for="question-4-answers-B">B) 8</label>
							</div>
							
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
								<label for="question-4-answers-C">C) 9</label>
							</div>
							
							<div>
								<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
								<label for="question-4-answers-D">D) Han har ikke reinsdyr</label>
							</div>
						</li>
						
						<li>
						
							<h3>På en skala fra 1-10, hvor gira er Annar på Jul?</h3>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A"required />
								<label for="question-5-answers-A">A) 1</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
								<label for="question-5-answers-B">B) 2</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
								<label for="question-5-answers-C">C) 3</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
								<label for="question-5-answers-D">D) 4</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-E" value="E" />
								<label for="question-5-answers-D">E) 5</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-F" value="F" />
								<label for="question-5-answers-D">F) 6</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-G" value="G" />
								<label for="question-5-answers-D">G) 7</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-H" value="H" />
								<label for="question-5-answers-D">H) 8</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-I" value="I" />
								<label for="question-5-answers-D">I) 9</label>
							</div>
							
							<div>
								<input type="radio" name="question-5-answers" id="question-5-answers-J" value="J" />
								<label for="question-5-answers-D">J) 10</label>
							</div>
						</li>
					</ol>
					<br>
					<input type="submit" value="Submit" class="submitbtn" />
					<br><br><br>
				</form>
			</div>
		</body>
	</html>
		
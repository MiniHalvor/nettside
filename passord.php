<!doctype html>
	<html>
		<head>
			<style>
			#myProgress {
			  
			  width: 100%;
			  background-color: #ddd;
			}

			#myBar {
			  
			  width: 1%;
			  height: 30px;
			  background-color: #4CAF50;
			  text-align: center;
			  line-height: 30px;
			  color: white;
			}
			</style>
			<meta http-equiv = "refresh" content = "5; url = index1.html" />
		</head>
		<body>
		
		


<center><h1>Vennligst vent, autentiserer</h1></center>

<div id="myProgress"></div>

<div id="myBar">1%</div>




<script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 50);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
}
</script>
<?php
			$passord=$_POST['passord'];
			if($passord=="passord") { 
			echo "<script> move(); </script>";

			}
				 
			else {
				header('Location: index.php');
			}
			
		?>
		</body>
	
	</html>

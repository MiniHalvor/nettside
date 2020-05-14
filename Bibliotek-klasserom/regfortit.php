<?php
// Start the session
session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Epsilon</title>
    <link rel="stylesheet" href="css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta charset="UTF-8" />
    <!--<link rel="shortcut icon" href="logoer/favicon.ico" /> -->
  </head>

  <body>
    <div id="master">
      <header class="header">
        <h1 class="logo"><a href="index.php">Epsilon</a></h1>
        <ul class="main-nav">
           <?php
           require 'phplogin.php';

           if (isset($_POST['tlf']) and isset($_POST['psw'])) {
             // Assigning POST values to variables.
             $username = $_POST['tlf'];
             $password = $_POST['psw'];

             // CHECK FOR THE RECORD FROM TABLE
             $sql = "SELECT * FROM `bruker` WHERE telefon='$username' and passord='$password'";

             ($result = mysqli_query($connection, $sql)) or
               die(mysqli_error($connection));

             $count = mysqli_num_rows($result);
             if ($count == 1) {
               $_SESSION["loggedin"] = true;
               $_SESSION["username"] = $username;
               $row = mysqli_fetch_array($result);
               $admin = $row['admin'];
               $_SESSION["admin"] = $admin;
             }
           }

           if (isset($_SESSION["admin"]) && $_SESSION["admin"] === "1") {
             echo '<li><a href="reghub.php">Registreringshub</a></li>';
             echo '<li><a href="administrer.php">Brukeroversikt</a></li>';
             echo '<li><a href="svar.php">Svar på spørsmål</a></li>';
           } else {
             echo '<li>';
             echo '<a href="intro.php">Ny til Epsilon?</a>';
             echo '</li>';
             echo '<li><a href="bøker.php">Våre bøker</a></li>';
             echo '<li><a href="qa.php">Spørsmål og svar</a></li>';
           }

           if (isset($_SESSION["admin"]) && $_SESSION["admin"] === "0") {
             echo '<li><a href="boklån.php">Lån bok</a></li>';
             echo '<li><a href="side.php">Min side</a></li>';
           }
           if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
             echo '<li><a href="logout.php">Logg ut</a></li>';
           } else {
             echo "<li>\n";
             echo "            <button\n";
             echo "              onclick=\"document.getElementById('id01').style.display='block'\"\n";
             echo "              style=\"width: auto;\"\n";
             echo "            >\n";
             echo "              Logg inn\n";
             echo "            </button>\n";
             echo "          </li>";
           }
           ?>
         
        </ul>
            <div id="id01" class="modal">
              <form
                class="modal-content animate"
                action="index.php"
                method="post"
              >
                <div class="imgcontainer">
                  <span
                    onclick="document.getElementById('id01').style.display='none'"
                    class="close"
                    title="Close Modal"
                    >&times;</span
                  >
                  <img src="bilder/img_avatar2.png" alt="Avatar" class="avatar" />
                </div>

                <div class="container">
                  <label for="tlf"><b>Telefonnummer</b></label>
                  <input
                    type="text"
                    placeholder="Skriv inn telefonnummeret ditt"
                    name="tlf"
                    required
                  />

                  <label for="psw"><b>Passord</b></label>
                  <input
                    type="password"
                    placeholder="Skriv inn passordet ditt"
                    name="psw"
                    required
                  />

                  <button type="submit">Logg inn</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember" />
                    Husk meg
                  </label>
                </div>

                <div class="container" style="background-color: #f1f1f1;">
                  <button
                    type="button"
                    onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn"
                  >
                    Avbryt
                  </button>
                  <span class="psw"><a href="registrer.php">Registrer deg</a></span>
                </div>
              </form>
            </div>

            <script>
              // Get the modal
              var modal = document.getElementById("id01");

              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function (event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              };
            </script>
      </header>
      <div id="content">
        <div id="tittel"><h1>Registrer eksemplar</h1></div>
         <?php if (isset($_SESSION["admin"]) && $_SESSION["admin"] === "1") {
           echo "<form action=\"regfortit_connection.php\" method=\"POST\">\n";
           echo "              <div class=\"container\">\n";
           echo "                <hr />\n";

           echo "<label for=\"tittel\">Velg en tittel:</label>\n";
           echo "  <select id=\"tittel\" name=\"tittel\">\n";

           include 'db_connection.php';
           $conn = OpenCon();
           $sql = "select * from tittel";
           $result = $conn->query($sql);

           while ($row = $result->fetch_assoc()) {
             echo "<option value='" .
               $row['tittelid'] .
               "'>" .
               $row['tittel'] .
               "</option>";
           }
           echo "  </select>";

           echo "<label for=\"forfatter\">Velg en forfatter:</label>\n";
           echo "  <select id=\"forfatter\" name=\"forfatter\">\n";

           $sql = "select * from forfatter";
           $result1 = $conn->query($sql);

           while ($row = $result1->fetch_assoc()) {
             echo "<option value='" .
               $row['forfatterid'] .
               "'>" .
               $row['fnavn'] .
               " " .
               $row['enavn'] .
               "</option>";
           }
           echo "  </select>";

           echo "                <button type=\"submit\" class=\"registerbtn\">Registrer</button>\n";
           echo "              </div> \n";
           echo "            </form>";
         } else {
           echo "<center><p>Vennligst logg inn som administrator for å se dette innholdet</p></center>";
         } ?>
      </div>
      <div id="footer">
        <div id="footer-container">
          <h1>Epsilon</h1>
          <hr />
          <div class="footer-flex">
            <ul>
              <li class="tittel">Kontakt</li>
              <li class="punkt">Kontakt oss</li>
              <li class="punkt">Nyhetsbrev</li>
            </ul>
            <ul>
              <li class="tittel">Ofte stilte spørsmål</li>
              <li class="punkt">Spørsmål 1</li>
              <li class="punkt">Spørsmål 2</li>
              <li class="punkt">Spørsmål 3</li>
              <li class="punkt">Spørsmål 4</li>
              <li class="punkt">Spørsmål 5</li>
            </ul>
            <ul>
              <li class="tittel">Om Epsilon</li>
              <li class="punkt">Introduksjonsguide</li>
              <li class="punkt">Finansiering</li>
            </ul>
          </div>
          <hr />
          <div id="socials">
            <a href="facebook.com" class="fa fa-facebook fa-3x"></a>
            <a href="instagram.com" class="fa fa-instagram fa-3x"></a>
            <a href="twitter.com" class="fa fa-twitter fa-3x"></a>
            <a href="youtube.com" class="fa fa-youtube fa-3x"></a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
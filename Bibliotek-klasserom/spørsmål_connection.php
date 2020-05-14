<?php
// Start the session
session_start(); ?>

        <?php
        include 'db_connection.php';

        $conn = OpenCon();

        $spørsmål = $_POST['spørsmål'];
        $brukerid = $_SESSION["brukerid"];
        $date = date("Y-m-d");

        $sql = "INSERT INTO `spørsmål` (`spørsmålid`, `spørsmål`, `datospurt`, `bruker_brukerid`) VALUES (NULL, '$spørsmål', '$date', '$brukerid')";

        if ($conn->query($sql) === true) {
          CloseCon($conn);
          header("location: qa.php");
          exit();
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          echo "<a href=\"index.php\">gå tilbake</a>";
        }
        ?>
      
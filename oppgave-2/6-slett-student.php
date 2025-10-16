<?php
/* slett-student.php
   Programmet lar brukeren velge en student og slette den fra databasen.
*/

include("db-tilkobling.php");  // Kobler til database-serveren og velger riktig database
?>

<?php
include("db-tilkobling.php");
?>
<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <title>Slett student</title>
  <script src="funksjoner.js"></script> <!-- må peke riktig -->
</head>
<body>

<h3>Slett student</h3>

<form method="post" action="" onsubmit="return bekreftSletting('studenten');">
  <select name="brukernavn">
    <option value="">-- Velg student --</option>
    <?php
      $sql = "SELECT * FROM student ORDER BY brukernavn;";
      $res = mysqli_query($db,$sql) or die("Feil");
      while ($row = mysqli_fetch_array($res)) {
        $bruk = $row['brukernavn'];
        $f = $row['fornavn'];
        $e = $row['etternavn'];
        echo "<option value='$bruk'>$bruk - $f $e</option>";
      }
    ?>
  </select>
  <input type="submit" name="slettStudentKnapp" value="Slett student">
</form>

<?php
if (isset($_POST['slettStudentKnapp'])) {
  // behandling...
}
?>

<?php
/* PHP kode som kjøres når brukeren trykker på "Slett student"-knappen */
if (isset($_POST["slettStudentKnapp"])) {
  $brukernavn = $_POST["brukernavn"];

  if (!$brukernavn) {
    print("Du må velge en student for å slette.");
  } 
  else {
    /* Sjekker om studenten faktisk finnes i databasen */
    $sqlSetning = "SELECT * FROM student WHERE brukernavn='$brukernavn';";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die("Feil ved henting av data.");

    if (mysqli_num_rows($sqlResultat) == 0) {
      print("Studenten finnes ikke i databasen.");
    } 
    else {
      /* Sletter studenten */
      $sqlSetning = "DELETE FROM student WHERE brukernavn='$brukernavn';";
      mysqli_query($db, $sqlSetning) or die("Feil ved sletting.");

      print("Studenten med brukernavn <b>$brukernavn</b> er slettet.");
    }
  }
}
?>

</body>
</html>

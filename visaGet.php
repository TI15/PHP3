<?php
if(empty($_GET)) {
  echo "<p>Du har inte skickat några parametrar till sidan</p>";
}

if(isset($_GET['hej'])) {
  echo "<p>Hej på dej själv!</p>";
}

if(isset($_GET['namn'])) {
  echo "<p>Ah, så ditt namn är '" . htmlentities($_GET['namn']) . "'. Mitt namn är Mumintrollet.</p>";
}

echo "<p>Allt innehåll i arrayen \$_GET:<br><pre>" . htmlentities(print_r($_GET, 1)) . "</pre>";
?>

<p>Pröva att klicka på någon av följande länkar:</p>

<ul>
  <li><a href='?hej'>Säg hej</a></li>
  <li><a href='?namn=Marvin'>Mitt namn är Marvin, vad heter du?</a></li>
  <li><a href='?namn=Marvin&amp;hej'>Säg hej och presentera dig!</a></li>
  <li><a href='?'>Skicka inga parametrar alls.</a></li>
</ul>

?>
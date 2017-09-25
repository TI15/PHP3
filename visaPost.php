<?php
// Alltid validera och sanitera inkommande information innan den används.
$field1 = isset($_POST['field1']) ? htmlentities($_POST['field1']) : null;
$field2 = isset($_POST['field2']) ? htmlentities($_POST['field2']) : null;
?>

<form method=post>
<fieldset>
<legend>Ett formulär att posta</legend>
<p><input type=text name=field1 value=<?=$field1?>></p>
<p><textarea name=field2><?=$field2?></textarea></p>
<input type=submit value=Skicka>
</fieldset>
</form>

<?="<p>Allt innehåll i arrayen \$_POST:<br><pre>" . htmlentities(print_r($_POST, 1)) . "</pre>"?>
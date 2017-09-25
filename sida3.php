<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		if(isset($_POST['fnamn']) && isset($_POST['enamn'])) {
			echo "Välkommen ".$_POST['fnamn']." ".$_POST['enamn']."!";
		}
		else
			echo "
			<form action='sida3.php' method='post'> Förnamn: <input type='text' name='fnamn'><br>
			Efternamn: <input type='text' name='enamn'><br>	<input type='reset' value='Avbryt'>
			<input type='submit' value='OK'>
			</form>";
		?>
	</body>
</html>
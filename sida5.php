<html>
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
	</head>
	<body>
		<?php if(isset($_POST['hund']) || isset($_POST['katt']) || isset($_POST['fagel'])) {
			echo "Du gillar:<br>";
			if(isset($_POST['hund'])) {
				echo $_POST['hund']."<br>";
			}
			if(isset($_POST['katt'])) {
				echo $_POST['katt']."<br>";
			}
			if(isset($_POST['fagel'])) {
				echo $_POST['fagel']."<br>";
			}
			
		}
		else {
			echo"
		<form action='sida5.php' method='post'>
		Kryssa för dina favoritdjur:<br>
		<input type='checkbox' name='hund' value='Hundar'>Hundar<br>
		<input type='checkbox' name='katt' value='Katter'>Katter<br>
		<input type='checkbox' name='fagel' value='Fåglar'>Fåglar<br>
		<input type='submit' value='OK'>
		</form>";
		}
		?>
	</body>
</html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php if(isset($_POST['fraga1'])) {
		echo "Du röstade ".$_POST['fraga1'];
		}
		?>
		<form action="sida4.php" method="post">
			Tycker du att det regnar för mycket?<br>
			<input type="radio" name="fraga1" value="JA">JA, absolut!<br>
			<input type="radio" name="fraga1" value="NEJ">Nej, inte alls.<br>
			<input type="submit" value="OK">
		</form>
	</body>
</html>
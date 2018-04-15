<!doctype html>
<html>
	<head>
		<meta charset="uft-8">
		<title>Kino</title>
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h2>Play Kino now and win!</h2>
		<img src="kino.png" alt="kino" width="25%" height="25%"/>
		<form method="post" action="result.php">
			<fieldset>
				<legend>Select 12 unique numbers between 1 and 80</legend>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
				<input type="number" class="num" min="1" max="80" name="numbers[]" required/>
			</fieldset>
			<input type="submit" value="Play!" id="submit"/>
		</form>
	</body>
</html>
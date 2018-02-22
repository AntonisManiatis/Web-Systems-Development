<!DOCTYPE html>
<html>
	<head>
		<title>#1 JavaScript</title>
	</head>
	<body>
		<h1>Login Page</h1>
		<form method="POST" action="login.php">
			<input type="text" placeholder="Username" name="username"/><br>
			<input type="email" placeholder="email" name="email"/><br>
			<input type="password" placeholder="Password" name="password"/><br>
			<input type="password" placeholder="Confirm Password" name="confirmPassword"/><br>	
			<input type="number" min="1" max="100" name="score"/><br>
			<p>Gender</p>
			<label><input type="radio" name="gender"/>Male</label>
			<label><input type="radio" name="gender"/>Female</label>
			<br>
			<input type="submit"/>
		</form>
		<form method="POST" action="calculator.php">
		<h3>Add</h3>
			<input type="number" name="num1"/><br>
			<input type="number" name="num2"/><br>
			<input type="text" name="operation"/>Select the operation to perform. (+, -, *, /)<br>
			<input type="submit" value="execute"/>
		</form>

		<?php
			$x="Bob";
			$y="Rob";
			echo "<b>Hello</b><br>";
			echo "<p style='color:green;font-size:40px'>How are you?</p>";
			echo $x;
			echo "<br>Hello " . $x . " and " . $y;
		?>
	</body>
</html>
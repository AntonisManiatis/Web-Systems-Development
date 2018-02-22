<?php
$username = $_POST["username"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$email = $_POST["email"];
$score = $_POST["score"];

if ($password === $confirmPassword)
{
	echo "Hello <span style='color:green'>".$username."</span>. 
	Your password is: <span style='color:red'>".$password."</span>";
	echo "<br>Your grade is: <br>";
	if ($score <= 100 && $score >= 97)
	{
		echo "A";
	}
	else if ($score <= 96 && $score >= 93)
	{
		echo "A";
	}
	else if ($score <= 92 && $score >= 90)
	{
		echo "A-";
	}
	else if ($score <= 89 && $score >= 87)
	{
		echo "B+";
	}
	else if ($score <= 86 && $score >= 83)
	{
		echo "B";
	}
	else if ($score <= 82 && $score >= 80)
	{
		echo "B-";
	}
	else if ($score <= 79 && $score >= 77)
	{
		echo "C+";
	}
	else if ($score <= 76 && $score >= 73)
	{
		echo "C";
	}
	else if ($score <= 72 && $score >= 70)
	{
		echo "C-";
	}
	else if ($score <= 69 && $score >= 67)
	{
		echo "D+";
	}
	else if ($score <= 66 && $score >= 65)
	{
		echo "D";
	}
	else
	{
		echo "E/F";
	}
}
else
{
	echo "Passwords do not match";
}
?>
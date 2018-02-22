<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"];

if ($operation == '+')
{
	echo $num1 + $num2;
}
else if ($operation == '-')
{
	echo $num1 - $num2;
}
else if ($operation == '*')
{
	echo $num1 * $num2;
}
else if ($operation == '/')
{
	if ($num2 == 0)
	{
		echo "Cannot divide by 0";
		return;
	}
	echo $num1 / $num2;
}
else
{
	echo "Unknown operation";
}
?>
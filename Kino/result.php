<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<img src="kino.png" alt="kino" width="25%" height="25%"/><br>
		<?php
			/*
			 * 
			 */
			const NUMBER_SIZE = 12;
			
			const MIN_NUMBER = 1;
			const MAX_NUMBER = 80;
			
			const ROW_LENGTH = 8;
			const COLUMN_LENGTH = 10;
			
			const GREY_HEX = "#d3d3d3";
			const RED_HEX = "#ff0000";
			
			$numbers = $_POST["numbers"];
			if (arrayContainsDuplicate($numbers))
			{
				echo "You can't have duplicate values!";
				header( "refresh:5; url=kino.php" );
				return;
			}
			
			sort($numbers);
			
			echo "<table border='1'><tr>";
			echo "<th colspan=".NUMBER_SIZE."> Your ".NUMBER_SIZE." selected numbers are:</th></tr><tr>";
			for ($i = 0; $i < NUMBER_SIZE; $i++)
			{
				echo "<td>" . $numbers[$i] . "</td>";
			}
			
			echo "</tr>";
			echo "</table>";		
			echo "<br>";
			
			$randomNumbers = selectRandomNumbers();
			$sameNumbers = array_intersect($numbers, $randomNumbers);
			
			echo "<table border =\"1\" style='border-collapse: collapse' width='500' height='400'>";
			$i = 0;
			for ($row = 1; $row <= ROW_LENGTH; $row++)
			{ 
				echo "<tr> \n";
				for ($col = 1; $col <= COLUMN_LENGTH; $col++)
				{
					$i++;
					if (in_array($i, $sameNumbers))
					{
						echo "<td bgcolor=".RED_HEX."> " .$i. "</td> \n";
					}
					else if (in_array($i, $randomNumbers))
					{
						echo "<td bgcolor=".GREY_HEX."> " .$i. "</td> \n";
					}
					else
					{
						echo "<td> " .$i. "</td> \n";
					}
				}
				
				echo "</tr>";
			}
			
			echo "</table>";
			echo "<br>";
			
			if (empty($sameNumbers))
			{
				echo "You didn't win anything :(";
			}
			else
			{
				$money = 0;
				switch (count($sameNumbers))
				{
					case 1:
						$money = 1;
						break;
					case 2:
						$money = 5;
						break;
					case 3:
						$money = 10;
						break;
					case 4:
						$money = 25;
						break;
					case 5:
						$money = 50;
						break;
					case 6:
						$money = 100;
						break;
					case 7:
						$money = 200;
						break;
					case 8:
						$money = 500;
						break;
					case 9:
						$money = 1000;
						break;
					case 10:
						$money = 2500;
						break;
					case 11:
						$money = 5000;
						break;
					case 12:
						$money = 10000;
						break;
					default:
						$money = 0;
				}
				
				echo "<h3><font size='20'>Congratulations! You won ".$money." euro!</font></h3>";
			}
			
			function arrayContainsDuplicate($array)  
			{  
				return count($array) != count(array_unique($array));    
			}
			
			function selectRandomNumbers()
			{
				$randomKinoNumbers = range(MIN_NUMBER, MAX_NUMBER);
				shuffle($randomKinoNumbers );
				$randomKinoNumbers = array_slice($randomKinoNumbers ,0, NUMBER_SIZE);
				return $randomKinoNumbers;
			}
		?>
	</body>
</html>

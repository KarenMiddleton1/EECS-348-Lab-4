
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$size = intval($_POST['size']);

	echo "<h2>Multiplication Table (1 to $size)</h2>";
	echo "<table>";
	
	echo "<tr><th> </th>";
	for ($col = 1; $col <= $size; $col++) {
		echo "<th>$col</th>";
	}
	echo "</tr>";

	for ($row = 1; $row <= $size; $row++) {
		echo "<tr>";
		echo "<th>$row</th>";

		for ($col = 1; $col <= $size; $col++) {
			echo "<td>" . ($row * $col) . "</td>";
		}

		echo "</tr>";
	}

	echo "</table>";
}
?>

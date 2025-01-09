<html>
<body>
<?php
$name = ["kohli","sharma","samson","pant"];
echo "<h4>PLAYERS NAME</h4>";
echo "<table border='1'><tr><th>SI NO.</th><th>NMAE</th></tr>";
for($i=0;$i<4;$i++){
	$s1=$i+1;
	echo "<tr><td>$s1</td><td>$name[$i]</td></tr>";
	}
echo "</table>";
?>
</body>
</html>
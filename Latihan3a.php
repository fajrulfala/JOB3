<html>
<head>
<title>Latihan Jobsheet 3A</title>
</head>
<body>
<?php
echo "<table border=1 >";

	$a=1;
	for($b=5;$b<=8;$b++)
{ 		$c=$a*$b; 
		echo "<td>";
		echo("$a x $b = $c"); 
		echo("<br>");
		echo"</td>";
}
echo "<tr>";
	$d=2;
	for($e=5;$e<=8;$e++)
{		 $f=$d*$e;
		echo "<td>";
		echo("$d x $e = $f"); 
		echo "<br>";
		echo "</td>";		
}
	
echo "<tr>";
	$g=3;
	for($h=5;$h<=8;$h++)
		{$i=$g*$h;
		echo "<td>";
		echo("$g x $h = $i"); }
		echo "<br>";
		echo "</td>";
echo "<tr>";
	$j=7;
	for($k=5;$k<=8;$k++)
		{ $l=$j*$k;
		echo "<td>";
		echo("$j x $k = $l"); }
		echo "<br>";
		echo "</td>";
		 
echo "<tr>";	
	$m=12;
	for($n=5;$n<=8;$n++)
		{$o=$m*$n;
		echo "<td>";
		echo("$m x $n = $o"); }
		echo "<br>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
?>
</body>
</html>
<!DOCTYPE html>
<html>
<h1>Task3</h1>
<p>output of scripts</p>
<br>
<?php
$x = 655;
echo "1) is 655 integer?"." ";
var_dump(is_int($x));
echo "<br>";
$x = 4.1;
echo "2) is 4.1 integer?"." ";
var_dump(is_int($x));
echo "<br>";
$x = 4.1;
echo "3) is 2000.5 float?"." ";
var_dump(is_float($x));
echo "<br>";
$x = "farah";
echo "4) is farah numeric?"." ";
var_dump(is_numeric($x));
echo "<br>";
echo "5) The minimum value of these numbers(0,100,-30,20) is ?"." ";
echo (min(0,100,-30,20));
echo "<br>";
echo "6) The maximum value of these numbers(0,100,-30,20) is ?"." ";
echo (max(0,100,-30,20));
echo "<br>";
$x="7) The absolute value of (-1258) is ?";
echo "$x"." ".(abs(-1258));
echo "<br>";
$x = "8) the round value for (6.1,4.6) is ?";
echo $x." ".(round(6.1))." "."and"." ".(round(4.6));
echo "<br>";
$x = "9) Random Number is ?";
echo $x." ".rand();
?>

</html>
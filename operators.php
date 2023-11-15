<?php

$a = 10;
$b = 20;

echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a ** 2;
echo "<br>";


$x = 5;
echo $x;
echo "<br>";
// $x = $x + 5;
$x += 5;
echo $x;
echo "<br>";

$x = 10;
$x -= 5;
echo $x;
echo "<br>";


$x *= 3;
echo $x;
echo "<br>";


$x /= 4;
echo $x;
echo "<br>";

$x %= 4;
echo $x;
echo "<br>";


$d = 10;
$h = 20;
$k = "10";
echo var_dump($d == $h);
echo "<br>";
echo var_dump($d === $k);
echo "<br>";
echo var_dump($d != $h);
echo "<br>";
echo var_dump($d <> $h);
echo "<br>";
echo var_dump($d < $h);
echo "<br>";
echo var_dump($d > $h);
echo "<br>";

$m = 5;
$m++;
echo $m;
echo "<br>";
++$m;
echo $m;
echo "<br>";

$d = 5;
$d--;
echo $d;
echo "<br>";
--$d;
echo $d;
echo "<br>";

$r = 5;
$e = 10;
echo "<br>";
echo var_dump(($r <= $e) AND ($r == $e));
echo "<br>";
echo var_dump(($r <= $e) OR ($r == $e));
echo "<br>";
echo var_dump(($r <= $e) && ($r == $e));
echo "<br>";
echo var_dump(($r <= $e) || ($r == $e));
echo "<br>";
$nn = "Khumpon";
$mm = "Chamsub";
echo $nn.$mm;
echo "<br>";
echo $nn.=$mm;
echo "<br>";
echo $nn;



?>
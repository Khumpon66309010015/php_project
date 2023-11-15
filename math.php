<?php

echo pi();
echo "<br>";
echo 22/7;
echo "<br>";

$r = 4;
$are = pi() * $r * $r;

echo pi()*4*4;
echo "<br>";
echo $are;
echo "<br>";

$num = [1,2,4,56,8,3,1,44,88,55,33,22,44,58,77];
echo min($num);
echo "<br>";
echo max($num);
echo "<br>";

echo abs(-99.99);   //แปลง ลบ เป็น บวก
echo "<br>";

echo sqrt(252);   //สแควรูท
echo "<br>";

echo round(3.99);  //ปัดเศษทศนิยม
echo "<br>";
echo round(3.49);
echo "<br>";

echo rand(3,12);   //random  กดรีเฟรช
echo "<br>";


?>
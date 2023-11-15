<?php

$name = "Khumpon";
$grade = "3.99";
$user = "admin";
$fullname = "Chamsub";
$sql = " SELECT * FROM std WHERE user = '$user'  ";

$word = "I LOVE YOU";
$search = "I'am study at Information Technology Department";

//นับจำนวน
echo strlen($fullname)."<br>";
echo str_word_count($word)."คำ<br>";
echo strrev($word)."<br>";
echo strpos($search,"study")."<br>";  //ตรวจสอบตำแหน่งคำ
echo str_replace("LOVE","Hate","$word")."<br>";
//echo str_replace("LOVE","Hate","I LOVE YOU")."<br>";
echo strtoupper($word)."<br>";
echo strtolower($word)."<br>";


?>
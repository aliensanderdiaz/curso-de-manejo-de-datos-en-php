<?php

$text = "PHP es un LEnguaje";
echo strtolower($text);
echo "<br>";
echo strtoupper($text);
echo "<br>";
echo ucfirst($text);
echo "<br>";
echo lcfirst($text);
echo "<br>";

$slug = str_replace(' ', '-', $text);
echo strtolower($slug);
echo "<br>";

$code = 39;
echo str_pad($code, 8, "#");
echo "<br>";
echo str_pad($code, 8, "#", STR_PAD_BOTH);
echo "<br>";
echo str_pad($code, 8, "#", STR_PAD_LEFT);
echo "<br>";

$text = "<h1>PHP es un lenguaje</h1>";
echo $text;
echo "<br>";
$text = "<h1>PHP es un lenguaje</h1>";
echo strip_tags($text);
echo "<br>";

$text = "En este año quiero aprender programación";
echo strtoupper($text);
echo "<br>";

echo mb_strtoupper($text);
echo "<br>";
<?php

$data = 'Estudio PHP';
// echo $data{0};
echo $data[0];

echo "<br>";

$post = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique culpa, ex odio doloremque quas enim nisi ullam incidunt harum porro optio repellendus beatae ab modi earum dolorum dicta? Nesciunt, consequatur.";
$extract = substr($post, 0, 20);

echo "$extract... [ver más]";
echo "<br>";
echo "<br>";

$data = "javascript, php, laravel";
echo $data;
echo "<br>";
$tags = explode(", ", $data);
echo "<pre>";
var_dump($tags);
echo "</pre>";

$courses = ['javascript', 'php', 'laravel'];
echo implode(", ", $courses);

echo "<br>";
$course = "       Curso practico de PHP    ";
// $course = trim($course);
// $course = ltrim($course);
$course = rtrim($course);
echo "<pre>";
echo "Quiero aprender mucho en el $course que está en platzi";
echo "</pre>";
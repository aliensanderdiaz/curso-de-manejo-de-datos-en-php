<?php

function greet($name)
{
    return "Hola, $name";
}

echo greet('Alex');
echo "<br>";

echo "<br>";
echo "<br>";
echo "REFERENCIA, cuando al argumento se le pasa la variable pero con el signo &";
echo "<br>";
echo "<br>";

$course = 'PHP';

function path(&$course)
{
    echo $course;
    echo "<br>";
    $course = 'Laravel';
    echo $course;
}
echo "<br>";
path($course);
echo "<br>";
echo $course;
echo "<br>";
echo "<br>";


function greet2($name = 'Juliana')
{
    return "Hola, $name";
}

echo greet2();
echo "<br>";
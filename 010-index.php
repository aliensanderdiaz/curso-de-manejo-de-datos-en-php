<?php

$greet = function ($name) {
    return "Hola, $name";
};

echo $greet('Alexanmder');
echo "<br>";

function greet2(Closure $lang, $name) {
    return $lang($name);
}

$es = function ($name) {
    return "Hola, $name";
};

$en = function ($name) {
    return "Hello, $name";
};

echo greet2($en, 'Lynda');
echo "<br>";
echo greet2($es, 'Alex');
echo "<br>";
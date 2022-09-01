<?php
$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

echo "<pre>";
var_dump($courses);

foreach ($courses as $key => $value) {
    echo "$key: $value <br>";
}


foreach ($courses as $course) {
    echo "$course <br>";
}

function upper($course) {
    echo strtoupper($course) . "<br>";
}

array_walk($courses, 'upper');

function upper2($course, $key) {
    echo strtoupper($course) . ": $key<br>";
}

array_walk($courses, 'upper2');

echo "<pre>";
echo "
/**
 * array_key_exists
 * in_array
 * array_keys
 * array_values
 */";
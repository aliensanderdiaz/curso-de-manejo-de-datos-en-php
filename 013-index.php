<?php
$courses = ['javascript', 'c', 'laravel', 'php', 'vuejs'];
sort($courses);

echo "<pre>";
var_dump($courses);

rsort($courses);

echo "<pre>";
var_dump($courses);

$courses = [
    100=> 'javascript',
    10 => 'c',
    1 => 'laravel',
    10000 => 'php',
    1000 => 'vuejs'
];
ksort($courses);

echo "<pre>";
var_dump($courses);
krsort($courses);

echo "<pre>";
var_dump($courses);

var_dump(array_slice($courses, 1));
var_dump(array_chunk($courses, 2));

echo "<pre>";
echo "
/**
 * array_shift
 * array_pop
 * array_unshift
 * array_push
 * array_flip
 */";
<?php
$courses = ['javascript', 'php'];
$wishes = ['laravel', 'vuejs'];

echo "<pre>";
var_dump(array_merge($courses, $wishes));

$courses = ['a'=>'javascript', 'b'=>'php'];
$wishes = ['a' => 'laravel', 'c' => 'vuejs'];
var_dump(array_merge_recursive($courses, $wishes));


$courses = ['javascript', 'php'];
$wishes = ['laravel', 'vuejs'];

echo "<pre>";
var_dump(array_combine($courses, $wishes));
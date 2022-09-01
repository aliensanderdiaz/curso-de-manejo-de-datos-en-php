<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('i@rimorsoft.com'));
echo "<br>";
var_dump(App\Validate::email('i@@rimorsoft.com'));
echo "<br>";
echo "<br>";

var_dump(App\Validate::url('https://www.youtube.com/'));
echo "<br>";
var_dump(App\Validate::url('youtube.com'));
echo "<br>";
echo "<br>";

var_dump(App\Validate::password('123456'));
echo "<br>";
var_dump(App\Validate::password('1234567890'));
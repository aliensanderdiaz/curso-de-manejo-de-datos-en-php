<?php

$password = '123456';
$password = '123456a';
$password = '1234567890';

echo preg_match('/^[0-9]{6,9}$/', $password);
echo "<br>";

echo var_dump(preg_match('/^[0-9]{6,9}$/', $password));
echo "<br>";

echo var_dump((bool) preg_match('/^[0-9]{6,9}$/', $password));
echo "<br>";
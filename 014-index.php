<?php
$courses = ['javascript', 'php'];
$wishes = ['javascript', 'laravel', 'php', 'vuejs'];

echo "<pre>";
var_dump(array_diff( $courses, $wishes));
echo "<pre>";
var_dump(array_diff( $wishes, $courses));

echo "#array_diff_assoc";
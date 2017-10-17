<?php
$new_array = [];
$file = parse_ini_file(".env");

foreach ($file as $key => $value) {
    $karr = explode('.', $key);
    $arr = &$new_array;

    foreach ($karr as $k => $v) {
        $arr = &$arr[$v];
    }

    $arr = $value;
}

unset($arr);
var_dump($new_array);


<?php
$array = [1, 2, 3];
$string= implode('|', $array);
//print_r(explode('|', $string));

$array[] = 4;
array_push($array, 5);

$newarray = array_map(function ($item) {
    return $item * 2;
}, $array);

//print_r($array);
//print_r($newarray);

$namedArray = [
  'ke2y' => '123'
];

//var_dump(array_key_exists('key', $namedArray));

print_r(array_keys($namedArray));

echo PHP_EOL;
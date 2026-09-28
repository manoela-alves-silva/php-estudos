<?php

$arr = [
    [1, 2, 3],
    [4, 5, 6],
];

print_r($arr);
echo "<br>";

echo $arr[0][1] . "<br>";
echo $arr[1][2] . "<br>";

echo "O array principal possui " . count($arr) . " arrays dentro dele.<br>";

echo "O primeiro array possui " . count($arr[0]) . " elementos.<br>";

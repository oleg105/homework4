<?php

$mas = [1, 2, 3, 4, 5];
$result = 0;

foreach ($mas as $el) {
    $result += $el * $el;
}
echo $result;
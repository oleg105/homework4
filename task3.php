<?php

$mas = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$day = 'пт';

foreach ($mas as $el) {
    if ($day == $el) {
        echo '<i>'. $el. '</i><br>';
        continue;
    }
    echo $el. '<br>';
}
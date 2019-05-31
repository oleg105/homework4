<?php

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$en = [];
$ru = [];

foreach ($arr as $key=>$el) {
    $en[] = $key;
    $ru[] = $el;
}

foreach ($en as $el) {
    echo $el . '  ';
}
echo '<br>';

foreach ($ru as $el) {
    echo $el . '  ';
}
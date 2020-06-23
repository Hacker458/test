<?php

$arr = ['fst' => 1, 'snd' => 2, 'thd' => 3, 'fth' => 4];
$new_arr = [];

$new_arr += $arr;

print_r($new_arr);


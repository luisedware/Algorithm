<?php

declare(strict_types=1);
error_reporting(E_ALL);

// PHP 原生函数简单实现
$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

// 入队
array_push($array, 10);

// 出队
array_shift($array);

echo '['.implode(',', $array).']';
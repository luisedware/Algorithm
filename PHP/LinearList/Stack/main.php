<?php

require_once '../../vendor/autoload.php';

use LinearList\Stack\ArrayStack;

$arrayStack = new ArrayStack(5);
$arrayStack->push('first');
var_dump($arrayStack->items); // ['first', null, null, null ,null]

$arrayStack->push('second');
var_dump($arrayStack->items); // ['first', 'second', null, null ,null]

$arrayStack->push('third');
var_dump($arrayStack->items); // ['first', 'second', 'third', null ,null]


$arrayStack->pop();
print_r($arrayStack); // ['first', 'second', null, null ,null]
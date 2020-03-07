<?php

declare(strict_types=1);

$arrayQueue = new ArrayQueue(5);
$arrayQueue->enqueue('Google');
$arrayQueue->enqueue('AliCloud');
$arrayQueue->enqueue('HuaWei');
$arrayQueue->enqueue('WeChat');
$arrayQueue->enqueue('Facebook');
$arrayQueue->enqueue('China');
echo $arrayQueue.PHP_EOL;

$arrayQueue->dequeue();
echo $arrayQueue.PHP_EOL;

$arrayQueue->dequeue();
echo $arrayQueue.PHP_EOL;

$arrayQueue->dequeue();
echo $arrayQueue.PHP_EOL;

$arrayQueue->dequeue();
echo $arrayQueue.PHP_EOL;

$arrayQueue->dequeue();
echo $arrayQueue.PHP_EOL;

$arrayQueue->dequeue();
echo $arrayQueue.PHP_EOL;


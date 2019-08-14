<?php

declare(strict_types=1);
error_reporting(E_ALL);

$splQueue = new SplQueue();
$splQueue->enqueue('hello');
$splQueue->enqueue('world');
$splQueue->enqueue('Great');
$splQueue->dequeue();

print_r($splQueue);

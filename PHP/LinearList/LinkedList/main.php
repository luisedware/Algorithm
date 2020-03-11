<?php

require_once '../../vendor/autoload.php';

use LinearList\LinkedList\SingleLinkedList;

$list = new SingleLinkedList();
var_dump($list); // 空链表

$list->push('Hello');
var_dump($list); // 头结点

$list->push('world');
var_dump($list); // 第二个节点

$list->push('sebastian')->push('kennedy');
var_dump($list);

$list->pop();
var_dump($list);

$list->pop();
var_dump($list);

$list->pop();
var_dump($list);
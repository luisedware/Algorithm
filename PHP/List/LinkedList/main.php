<?php

require '../../vendor/autoload.php';

use LinkedList\SingleLinkedList;
use LinkedList\SingleLinkedListNode;

$list = new SingleLinkedList();
var_dump($list);

$node = new SingleLinkedListNode('Hello');
var_dump($node);

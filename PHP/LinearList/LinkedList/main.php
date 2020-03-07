<?php

require_once '../../vendor/autoload.php';

use LinearList\LinkedList\SingleLinkedList;
use LinearList\LinkedList\SingleLinkedListNode;

$list = new SingleLinkedList();
var_dump($list);

$node = new SingleLinkedListNode('Hello');
var_dump($node);

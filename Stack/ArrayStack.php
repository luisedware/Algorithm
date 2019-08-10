<?php

declare(strict_types=1);
error_reporting(E_ALL);

abstract class Stack
{
    // 元素
    public $items;
    // 栈中元素个数
    public $count;
    // 栈的大小
    public $length;
}

interface StackHandle
{
    // 入栈
    public function push($item);

    // 出栈
    public function pop();
}

class ArrayStack extends Stack implements StackHandle
{
    public function __construct($length)
    {
        $this->count = 0;
        $this->items = new SplFixedArray($length);
        $this->length = $length;
    }

    public function push($item)
    {
        // 判断数组空间是否足够
        if ($this->count === $this->length) {
            echo '栈的空间已满'.PHP_EOL;

            return false;
        }

        $this->items[$this->count] = $item;
        $this->count++;

        return true;
    }

    public function pop()
    {
        if ($this->count === 0) {
            echo '栈的空间为空'.PHP_EOL;

            return false;
        }

        $this->items[$this->count - 1] = null;
        $this->count--;

        return true;
    }
}

$arrayStack = new ArrayStack(5);
$arrayStack->push('first');
$arrayStack->push('second');
$arrayStack->push('third');
print_r($arrayStack);

$arrayStack->pop();
print_r($arrayStack);
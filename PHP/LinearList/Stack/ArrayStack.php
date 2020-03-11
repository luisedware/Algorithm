<?php

namespace LinearList\Stack;

use SplFixedArray;

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
<?php

namespace LinearList\Stack;

use SplFixedArray;

abstract class Stack
{
    // 元素
    protected SplFixedArray $items;
    // 栈中元素数量
    protected int $count;
    // 栈的大小
    protected int $length;
}
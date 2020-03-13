<?php

namespace LinearList\Stack;

interface StackHandle
{
    // 入栈
    public function push($item);

    // 出栈
    public function pop();

    // 返回最后入栈的元素
    public function peek();

    // 返回栈中元素数量
    public function count();

    // 返回栈的大小
    public function length();
}
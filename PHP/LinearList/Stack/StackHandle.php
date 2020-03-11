<?php

namespace LinearList\Stack;

interface StackHandle
{
    // 入栈
    public function push($item);

    // 出栈
    public function pop();
}
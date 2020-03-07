<?php

// 队列基本操作
interface QueueHandle
{
    // 入队
    public function enqueue($item);

    // 出队
    public function dequeue();
}
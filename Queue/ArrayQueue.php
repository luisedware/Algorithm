<?php

declare(strict_types=1);
error_reporting(E_ALL);

// 队列基础元素
abstract class Queue
{
    public $items;
    public $count;
    public $head = 0;
    public $tail = 0;
}

// 队列基本操作
interface QueueHandle
{
    // 入队
    public function enqueue($item);

    // 出队
    public function dequeue();
}

// 数组队列
class ArrayQueue extends Queue implements QueueHandle
{
    public function __construct(int $count)
    {
        // 申请一个长度为 $count 的数组
        $this->items = array_fill(0, $count, null);
        $this->count = $count;
    }

    public function enqueue($item)
    {
        // tail === count 表示队列已满
        if ($this->tail - $this->head === $this->count) {
            echo '当前队列已满'.PHP_EOL;

            return false;
        }

        $this->items[$this->tail] = $item;
        $this->tail++;

        return $this->items;
    }

    public function dequeue()
    {
        // head === tail 表示队列为空
        if ($this->head === $this->tail) {
            echo '当前队列为空'.PHP_EOL;

            return false;
        }

        unset($this->items[$this->head]);
        $this->head++;

        return $this->items;
    }

    public function __toString()
    {
        return ('['.implode(',', $this->items).']').PHP_EOL;
    }
}

$arrayQueue = new ArrayQueue(5);

$arrayQueue->enqueue('Google');
$arrayQueue->enqueue('AliCloud');
$arrayQueue->enqueue('HuaWei');
$arrayQueue->enqueue('WeChat');
$arrayQueue->enqueue('Facebook');
$arrayQueue->enqueue('China');
echo $arrayQueue;

$arrayQueue->dequeue();
$arrayQueue->dequeue();
$arrayQueue->dequeue();
$arrayQueue->dequeue();
$arrayQueue->dequeue();
$arrayQueue->dequeue();
echo $arrayQueue;


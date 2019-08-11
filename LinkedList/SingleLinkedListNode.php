<?php

namespace LinkedList;

/**
 * 单向链表节点
 *
 * Class SimpleLinkedListNode
 */
class SingleLinkedListNode
{
    /**
     * 节点中的数据域
     *
     * @var
     */
    public $data;
    /**
     * 节点中的指针域，指向下一个节点
     *
     * @var
     */
    public $next;

    public function __construct($data = null)
    {
        $this->data = $data;
        $this->next = null;
    }
}


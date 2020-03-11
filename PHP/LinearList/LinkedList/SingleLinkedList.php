<?php

namespace LinearList\LinkedList;

/**
 * 单向链表
 *
 * Class SingleLinkedList
 *
 * @package LinearList\LinkedList
 */
class SingleLinkedList
{
    /**
     * 单链表头结点
     *
     *
     * @var SingleLinkedListNode|null
     */
    public ?SingleLinkedListNode $head;
    /**
     * 单链表的长度
     *
     * @var int
     */
    public int $length;

    /**
     * 初始化单链表
     *
     * SingleLinkedList constructor.
     *
     * @param  SingleLinkedListNode|null  $head
     */
    public function __construct(?SingleLinkedListNode $head = null)
    {
        $this->head = $head;
        $this->length = 0;
    }

    /**
     * 入栈
     *
     * @param $data
     *
     * @return $this
     */
    public function push($data)
    {
        // 新增单链表节点
        $new_node = new SingleLinkedListNode($data);

        // 判断是否为空链表
        if ($this->head === null) {
            // 添加头结点
            $this->head = $new_node;
        } else {
            $current_node = $this->head;
            for ($i = 0; $i < $this->length - 1; $i++) {
                $current_node = $current_node->next;
            }

            // 设置单链表节点的数据域与节点域
            $new_node->next = $current_node->next;
            $current_node->next = $new_node;
        }

        // 单链表长度增一
        $this->length++;

        return $this;
    }

    /**
     * 出栈
     *
     * @return $this
     */
    public function pop()
    {
        if (!$this->head) {
            return $this;
        }

        if (!$this->head->next) {
            $this->head = null;
            $this->length--;

            return $this;
        }

        $prev_node = $current_node = $this->head;
        for ($i = 0; $i < $this->length - 1; $i++) {
            $prev_node = $current_node;
            $current_node = $current_node->next;
        }

        $prev_node->next = null;
        $this->length--;

        return $this;
    }

    /**
     * 获取
     *
     * @return int
     */
    public function count()
    {
        return $this->length;
    }
}
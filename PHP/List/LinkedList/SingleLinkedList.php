<?php

namespace LinkedList;

class SingleLinkedList
{
    public $head;
    public $length;

    public function __construct($head = null)
    {
        if (null === $head) {
            $this->head = new SingleLinkedListNode();
        } else {
            if (! $head instanceof SingleLinkedListNode) {
                return false;
            }

            $this->head = $head;
        }

        $this->length = 0;
    }
}
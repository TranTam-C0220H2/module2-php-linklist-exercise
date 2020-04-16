<?php


class MyNode
{
    public $dataNode;
    public $nextNode;
    public function __construct($dataNode)
    {
        $this->dataNode = $dataNode;
        $this->nextNode = null;
    }

    public function getData()
    {
        return $this->dataNode;
    }
}
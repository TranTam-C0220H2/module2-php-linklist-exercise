<?php


class MyLinkList
{
    protected $firstNode;
    protected $lastNode;
    protected $numNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->numNode = 0;
    }

    public function addFirst($dataNode)
    {
        $newNode = new MyNode($dataNode);
        $newNode->nextNode = $this->firstNode;
        $this->firstNode = $newNode;
        if ($this->lastNode == null) {
            $this->lastNode = $newNode;
        }
        $this->numNode++;
    }

    public function addLast($dataNode)
    {
        $newNode = new MyNode($dataNode);
        if ($this->lastNode != null) {
            $this->lastNode->nextNode = $newNode;
            $newNode->nextNode = null;
            $this->lastNode = $newNode;
            $this->numNode++;
        } else $this->addFirst($dataNode);
    }

    public function get($index)
    {
        $countNode = 0;
        $currentNode = $this->firstNode;
        while ($countNode < $index) {
            $currentNode = $currentNode->nextNode;
            $countNode++;
        }
        return $currentNode;
    }

    public function add($index, $element)
    {
        $newNode = new MyNode($element);
        $currentNode = $this->get($index - 1);
        $afterNode = $currentNode->nextNode;
        $currentNode->nextNode = $newNode;
        $newNode->nextNode = $afterNode;
        $this->numNode++;
    }

    public function removeByIndex($index)
    {
        $beforeNode = $this->get($index - 1);
        $afterNode = $beforeNode->nextNode->nextNode;
        $beforeNode->nextNode = $afterNode;
        $this->numNode--;
    }

    public function removeFirst()
    {
        if ($this->firstNode != 0) {
            $this->firstNode = $this->firstNode->nextNode;
            $this->numNode--;
        }
    }

    public function removeLast()
    {
        $currentNode = $this->firstNode;
        while ($currentNode->nextNode->nextNode != null) {
            $currentNode = $currentNode->nextNode;
        }
        $currentNode->nextNode = null;
        $this->numNode--;
    }

    public function size()
    {
        return $this->numNode;
    }

    public function printList()
    {
        $arrayList = [];
        $currentNode = $this->firstNode;
        while ($currentNode != null) {
            array_push($arrayList, $currentNode->getData());
            $currentNode = $currentNode->nextNode;
        }
        return $arrayList;
    }

    public function contains($element)
    {
        $currentNode = $this->firstNode;
        while ($currentNode != null) {
            if ($currentNode->getData() == $element) {
                return 1;
            }
            $currentNode = $currentNode->nextNode;
        }
        return 0;
    }

    public function indexOf($element)
    {
        $currentNode = $this->firstNode;
        $indexNeedToFind = 0;
        while ($currentNode != null) {
            if ($currentNode->getData() == $element) {
                return $indexNeedToFind;
            }
            $currentNode = $currentNode->nextNode;
            $indexNeedToFind++;
        }
        return -1;
    }
}
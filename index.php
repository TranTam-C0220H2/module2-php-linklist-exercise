<?php
include 'MyNode.php';
include 'MyLinkList.php';

$link = new MyLinkList();
$link->addFirst(33);
$link->addFirst(22);
$link->addFirst(11);
$link->addLast(44);
$link->addLast(55);
$link->addLast(66);
$link->add(4,10);
$link->removeByIndex(3);
$link->removeFirst();
$link->removeLast();

echo $link->get(2)->getData().'<br>';
echo implode('-',$link->printList()).'<br>';
echo $link->size().'<br>';
echo $link->contains(22).', ';
echo $link->contains(44).'<br>';
echo $link->indexOf(22).', ';
echo $link->indexOf(44).'<br>';
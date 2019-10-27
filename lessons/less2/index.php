<?php
include "Good.php";
include "DigitalGood.php";
include "PicesGood.php";
include "WeightGood.php";

$obj1 = new DigitalGood;
$obj1->setName("DR-WEB");
$obj1->setPrice(100);
$obj1->setIncome(5); // продано штук
$obj1->show();

$obj2 = new PicesGood;
$obj2->setName("Notebook");
$obj2->setPrice(200);
$obj2->setIncome(2); // продано штук
$obj2->show();

$obj3 = new WeightGood;
$obj3->setName("Rice");
$obj3->setPrice(30);
$obj3->setIncome(40); // продано штук
$obj3->show();
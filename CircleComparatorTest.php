<?php
include_once "CircleComparator.php";
include_once "Circle.php";
$circleOne = new Circle("circleOne",10);
$circleTwo = new Circle("circleTwo",12);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compareTo($circleOne,$circleTwo));

<?php
include_once "Circle.php";
include_once "Comparable.php";

class CircleComparator implements Comparable
{

    public function compareTo($circleOne, $circleTwo)
    {
       $radiusOne = $circleOne->getRadius();
       $radiusTwo = $circleTwo->getRadius();
        if ($radiusOne > $radiusTwo) {
            return 1;
        }  else if($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }

}
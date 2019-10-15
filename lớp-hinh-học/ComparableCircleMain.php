<?php
include "ComparableCircle.php";
$circleOne = new ComparableCircle('circleOne',8);
$circleTwo = new ComparableCircle('circleTwo',6);
var_dump($circleOne->compareTo($circleTwo));

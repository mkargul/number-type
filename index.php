<?php

require_once ('PerfectNumber.php');

$integersArray = [6, 12, 8];

$perfectNumber = new PerfectNumber();

foreach($integersArray as $integer) {
   echo $integer . " type is " . $perfectNumber->getClassification($integer) . "<br/>";
}


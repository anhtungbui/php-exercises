<?php 
/*
Check if Number is within a Given Range
source: edabit

Given a number and an object with min and max properties, return true if the number lies within the given range (inclusive).

**Examples

isInRange(4, array('min' => 0, 'max' => 5 )) ➞ true

isInRange(4, array('min' => 4, 'max' => 5 )) ➞ true

isInRange(4, array('min' => 6, 'max' => 10 )) ➞ false

isInRange(5, array('min' => 5, 'max' => 5 )) ➞ true
*/

function isInRange($num, $range) {
  return $num >= $range["min"] && $num <= $range["max"];
}
?>
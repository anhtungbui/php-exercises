<?php
/*
Less Than 100?
source: edabit

Given two numbers, return true if the sum of both numbers is less than 100. Otherwise return false.

**Examples

lessThan(22, 15) ➞ true
// 22 + 15 = 37

lessThan(83, 34) ➞ false
// 83 + 34 = 117

lessThan100(3, 77) ➞ true
*/

function lessThan($a, $b) {
  return $a + $b < 100;
}
?>
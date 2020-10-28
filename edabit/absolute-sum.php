<?php
/*
Absolute Sum
source: edabit
https://edabit.com/challenge/a6tpAcjtzwesDdy8M

Take an array of integers (positive or negative or both) and 
return the sum of the absolute value of each element.

**Examples

getAbsSum([2, -1, 4, 8, 10]) ➞ 25

getAbsSum([-3, -4, -10, -2, -3]) ➞ 22

getAbsSum([2, 4, 6, 8, 10]) ➞ 30

getAbsSum([-1]) ➞ 1
*/

// SOLUTION 1
function getAbsSum($arr) {
  $positiveArr = [];
  foreach($arr as $value) {
    array_push($positiveArr, abs($value));
  }
  return array_sum($positiveArr);
}

// saved SOLUTION 2
function getAbsSumV2($arr) {
  return array_sum(array_map("abs", $arr));
}

// SOLUTION 3
function getAbsSumV3($arr) {
  $sum = 0;
  foreach($arr as $value) {
    $sum += abs($value);
  }
  return $sum;
}

// saved SOLUTION 4
function getAbsSumV4($arr) {
  return array_reduce($arr, function($total, $element){
	return $total += abs($element);
  });
}

?>
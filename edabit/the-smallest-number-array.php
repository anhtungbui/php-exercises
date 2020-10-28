<?php
/*
Find the Smallest Number in an Array
source: edabit
https://edabit.com/challenge/kbocbu4vgaGvt7h9F

Create a function that takes an array of numbers and returns the smallest number in the set.

**Examples

findSmallestNum([34, 15, 88, 2]) ➞ 2

findSmallestNum([34, -345, -1, 100]) ➞ -345

findSmallestNum([-76, 1.345, 1, 0]) ➞ -76

findSmallestNum([0.4356, 0.8795, 0.5435, -0.9999]) ➞ -0.9999

findSmallestNum([7, 7, 7]) ➞ 7
*/

// SOLUTION 1
function findSmallestNum($arr) {
  return min($arr);
}

// SOLUTION 2
function findSmallestNumV2($arr) {
  sort($arr);
  return $arr[0];
}

// SOLUTION 3
function findSmallestNumV3($arr) {
  $min = $arr[0];
  for ($i = 1; $i < sizeof($arr); $i++) {
    if ($min > $arr[$i]) {
      $min = $arr[$i];
    }
  }

  return $min;
}

?>
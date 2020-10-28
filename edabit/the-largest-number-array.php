<?php
/*
Find the Largest Number in an Array
source: edabit
https://edabit.com/challenge/EL4acLWouKBbGHYvP

Create a function that takes an array of numbers. Return the largest number in the array.

**Examples

findLargestNum([4, 5, 1, 3]) ➞ 5

findLargestNum([300, 200, 600, 150]) ➞ 600

findLargestNum([1000, 1001, 857, 1]) ➞ 1001
*/

// SOLUTION 1
function findLargestNum($arr) {
  return max($arr);
}

// SOLUTION 2
function findLargestNumV2($arr) {
  rsort($arr);
  return $arr[0];
}

// SOLUTION 3
function findLargestNumV3($arr) {
  sort($arr);
  return $arr[sizeof($arr) - 1];
}

// SOLUTION 4
function findLargestNumV4($arr) {
  $max = $arr[0];
  for ($i = 1; $i < sizeof($arr); $i++) {
    if ($max < $arr[$i]) {
      $max = $arr[$i];
    }
  }

  return $max;
}

?>
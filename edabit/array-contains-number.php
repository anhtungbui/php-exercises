<?php
/*
Check if an Array Contains a Given Number
source: edabit
https://edabit.com/challenge/7KAa8CksEiYFQdESp

Write a function to check if an array contains a particular number.

**Examples

check([1, 2, 3, 4, 5], 3) ➞ true

check([1, 1, 2, 1, 1], 3) ➞ false

check([5, 5, 5, 6], 5) ➞ true

check([], 5) ➞ false
*/

// SOLUTION 1
function check($arr, $num) {
  $isFound = false;
  foreach($arr as $value) {
    if ($value === $num) {
      $isFound = true;
    }
  }

  return $isFound;
}

// SOLUTION 2
function checkV2($arr, $num) {
  return in_array($num, $arr);
}

// SOLUTION 3
function checkV3($arr, $num) {
  $isFound = false;
  for ($i = 0; $i < sizeof($arr); $i++) {
    if ($arr[$i] === $num) {
      $isFound = true;
			break;
    }
  }

  return $isFound;
}

?>
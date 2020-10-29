<?php
/* 
Reverse an Array
source: edabit 
https://edabit.com/challenge/4w5pz4bAHimj7HiHb

Write a function to reverse an array.

**Examples

reverse([1, 2, 3, 4]) ➞ [4, 3, 2, 1]

reverse([9, 9, 2, 3, 4]) ➞ [4, 3, 2, 9, 9]

reverse([]) ➞ []
*/

// SOLUTION 1
function reverse($arr) {
  return array_reverse($arr);
}

// SOLUTION 2
function reverseV2($arr) {
  $result = [];
  for ($i = count($arr); $i > 0; $i--) {
    array_push($result, $arr[$i - 1]);
  }

  return $result;
}
?>
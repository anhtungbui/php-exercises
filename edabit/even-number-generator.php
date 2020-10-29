<?php
/*
Even Number Generator
source: edabit

Create a function that finds all even numbers from 1 to the given number.

**Examples

findEvenNums(8) ➞ [2, 4, 6, 8]

findEvenNums(4) ➞ [2, 4]

findEvenNums(2) ➞ [2]
*/

function findEvenNums($num) {
  $result = [];
  for ($i = $num; $i > 1;  $i--) {
    if ($i % 2 === 0) array_unshift($result, $i);
  }
  
  return $result;
}
?>
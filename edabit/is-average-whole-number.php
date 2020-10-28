<?php
/*
Is the Average of All Elements a Whole Number?
source: edabit
https://edabit.com/challenge/5QFCBpgZ9Yp8dt4xm

Create a function that takes an array as an argument and returns true or false 
depending on whether the average of all elements in the array is a whole number or not.

**Examples

isAvgWhole([1, 3]) ➞ true

isAvgWhole([1, 2, 3, 4]) ➞ false

isAvgWhole([1, 5, 6]) ➞ true

isAvgWhole([1, 1, 1]) ➞ true

isAvgWhole([9, 2, 2, 5]) ➞ false
*/

function isAvgWhole($arr) {
  $avg = array_sum($arr) / count($arr);
  return is_int($avg);
}
?>
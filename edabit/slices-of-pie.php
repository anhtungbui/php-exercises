<?php
/*
Slice of Pie
source: edabit
https://edabit.com/challenge/tdksELEr2WTWNS7Eb

Create a function that determines whether or not it's possible to split a pie fairly 
given these three parameters:

Total number of slices.
Number of recipients.
How many slices each person gets.
The function will be in this form:

equalSlices(total slices, no. recipients, slices each)

**Examples

equalSlices(11, 5, 2) ➞ true
// 5 people x 2 slices each = 10 slices < 11 slices

equalSlices(11, 5, 3) ➞ false
// 5 people x 3 slices each = 15 slices > 11 slices

equalSlices(8, 3, 2) ➞ true

equalSlices(8, 3, 3) ➞ false

equalSlices(24, 12, 2) ➞ true
*/

function equalSlices($total, $people, $each) {
  return $total >= $people * $each;
}
?>
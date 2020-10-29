<?php
/*
Sum of Cubes
source: edabit

Create a function that takes in an array of numbers and returns the sum of its cubes.

**Examples

sumOfCubes([1, 5, 9]) ➞ 855
// Since 1^3 + 5^3 + 9^3 = 1 + 125 + 729 = 855

sumOfCubes([3, 4, 5]) ➞ 216

sumOfCubes([2]) ➞ 8

sumOfCubes([]) ➞ 0
*/

// SOLUTION 1
function sumOfCubes($nums) {
  $sum = 0;
  foreach($nums as $num) {
    $sum += $num ** 3;
  }
  return $sum;
}

// saved SOLUTION 2
function sumOfCubesV2($nums) {
	return array_sum(array_map(function($v) {
		return pow($v, 3);
	}, $nums));
}
?>
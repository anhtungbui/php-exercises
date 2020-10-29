<?php
/*
Product of All Integers
source: edabit
https://edabit.com/challenge/ccTqypWoLYvLGeoPW

Create a function that returns the product of all odd integers in an array.

Examples

oddProduct([3, 4, 1, 1, 5]) ➞ 15

oddProduct([5, 5, 8, 2, 4, 32]) ➞ 25

oddProduct([1, 2, 1, 2, 1, 2, 1, 2]) ➞ 1
*/

// SOLUTION 1
function oddProduct($arr) {
  $product = 1;
  foreach($arr as $num) {
    if ($num % 2 != 0) 
      $product *= $num;
  }

  return $product;
}

// SOLUTION 2
function oddProductV2($arr) {
	return array_product(array_filter($arr, function($v) {
		return $v % 2 === 1;
	}));
}
?>
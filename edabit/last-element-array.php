<?php
/*
Return the Last Element in an Array
source: edabit

Create a function that accepts an array and returns the last item in the array.

**Examples

getLastItem([1, 2, 3]) ➞ 3

getLastItem(["cat", "dog", "duck"]) ➞ "duck"

getLastItem([true, false, true]) ➞ true
*/

// SOLUTION 1
function getLastItem($arr) {
  return $arr[count($arr) - 1];
}

// SOLUTION 2
function getLastItemV2($arr) {
	return end($arr);
}

// SOLUTION 3
function getLastItem($arr) {
  return array_pop($arr);
}

?>
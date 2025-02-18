<?php
/*
Repeat the Same Item Multiple Times
source: edabit

Create a function that takes two arguments (item, times). 
The first argument (item) is the item that needs repeating 
while the second argument (times) is the number of times the item is to be repeated. 
Return the result in an array.

**Examples

repeat("edabit", 3) ➞ ["edabit", "edabit", "edabit"]

repeat(13, 5) ➞ [13, 13, 13, 13, 13]

repeat("7", 2) ➞ ["7", "7"]

repeat(0, 0) ➞ []
*/

// SOLUTION 1
function repeat($item, $times) {
  $result = [];

  for ($i = 0; $i < $times; $i++) {
    array_push($result, $item);
  }

  return $result;
}

// saved SOLUTION 2
function repeatV2($item, $times) {
	return array_fill(0, $times, $item);
}
?>
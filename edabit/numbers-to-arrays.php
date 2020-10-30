<?php
/*
Numbers to Arrays and Vice Versa
source: edabit
https://edabit.com/challenge/dD5fCY2nKdMvsZ7Zx

Write two functions:
toArray(), which converts a number to an array of its digits.
toNumber(), which converts an array of digits back to its number.

**Examples

toArray(235) ➞ [2, 3, 5]

toArray(0) ➞ [0]

toNumber([2, 3, 5]) ➞ 235

toNumber([0]) ➞ 0
*/

// SOLUTION 1
function toArray($num) {
  $result = [];
  $num = strval($num);
  $numbers = str_split($num);

  foreach($numbers as $value) {
    array_push($result, intval($value));
  }

  return $result;
}

function toNumber($arr) {
  $result = '';

  foreach($arr as $value) {
    $result .= $value;
  }

  return intval($result);
}

// saved SOLUTION 2
function toArrayV2($num) {
	return array_map('intval', str_split($num));
}

function toNumberV2($arr) {
	return (int) implode($arr, '');
}
?>
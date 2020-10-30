<?php
/*
Is There an Upward Trend?
source: edabit
https://edabit.com/challenge/cQzqRcNjJ7FhAbXki

Create a function that determines if there is an upward trend.

**Examples

upwardTrend([1, 2, 3, 4]) ➞ true

upwardTrend([1, 2, 6, 5, 7, 8]) ➞ false

upwardTrend([1, 2, 3, "4"]) ➞ "Strings not permitted!"

*/

// SOLUTION 1
function upwardTrend($arr) {
  $result = true;
  $upwardArr = $arr;
  sort($upwardArr);

  for ($i = 0; $i < count($arr); $i++) {
    if (gettype($arr[$i]) === "string") return "Strings not permitted!";
    else if ($upwardArr[$i] !== $arr[$i]) $result = false;
  }

  return $result;
}

// SOLUTION 2
function upwardTrendV2($arr) {
	for($i=1;$i<count($arr);$i++){
		if(!is_int($arr[$i]))
			return "Strings not permitted!";
		if($arr[$i-1]>$arr[$i])
			return false;		
	}
	return true;
}
?>
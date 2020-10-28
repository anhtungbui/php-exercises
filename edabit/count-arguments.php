<?php
/*
Count the Arguments
source: edabit
https://edabit.com/challenge/zpDwndRtce5yDZTCk
Create a function that returns the number of arguments it was called with.

**Examples

numArgs() ➞ 0

numArgs("foo") ➞ 1

numArgs("foo", "bar") ➞ 2

numArgs(true, false) ➞ 2

numArgs({}) ➞ 1
*/

// SOLUTION 1
function numArgs() {
  return func_num_args();
}

// saved SOLUTION 2
function numArgsV2(...$args) {
	return count($args);
}
?>
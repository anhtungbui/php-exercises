<?php 
/*
Convert Hours into Seconds
source: edabit

Write a function that converts hours into seconds.

**Examples

howManySeconds(2) ➞ 7200

howManySeconds(10) ➞ 36000

howManySeconds(24) ➞ 86400

*/

function howManySeconds($hours) {
  return $hours * 60 * 60;
}
?>
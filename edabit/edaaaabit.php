<?php
/*
Edaaaaabit
source: edabit

Write a function that takes an integer and returns a string with the given number of "a"s in Edabit.

**Examples

howManyTimes(5) ➞ "Edaaaaabit"

howManyTimes(0) ➞ "Edbit"

howManyTimes(12) ➞ "Edaaaaaaaaaaaabit"
Notes

The string must start with "Ed" and end with "bit".
You'll only be given integers as test input.
*/

function howManyTimes($num) {
  $repeatA = str_repeat("a", $num);
  return "Ed" .$repeatA ."bit";
}
?>
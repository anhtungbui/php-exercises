<?php
/*
String to Integer and Vice Versa
source: edabit
https://edabit.com/challenge/s4k32KS57izpAMKnT

Write two functions:

toInt() : A function to convert a string to an integer.
toStr() : A function to convert an integer to a string.

**Examples

toInt("77") ➞ 77

toInt("532") ➞ 532

toStr(77) ➞ "77"

toStr(532) ➞ "532"
*/

function toInt($str) {
  return intval($str);
}

function toStr($int) {
  return strval($int);
}

?>

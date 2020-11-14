<?php
/*
Find the Total Number of Digits the Given Number Has
source: edabit

Create a function that takes a number as an argument and returns the amount of digits it has.

**Examples

findDigitAmount(123) ➞ 3

findDigitAmount(56) ➞ 2

findDigitAmount(7154) ➞ 4

findDigitAmount(61217311514) ➞ 11

findDigitAmount(0) ➞ 1 
*/

function findDigitAmount($num) {
  return strlen(strval($num));
  // return strlen((string)$num);
}

?>
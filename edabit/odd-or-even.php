<?php
/*
Is the Number Even or Odd?
source: edabit
https://edabit.com/challenge/spu2dbrHPkfmtPG9W

Create a function that takes a number as an argument and returns "even" for even numbers 
and "odd" for odd numbers.

**Examples

isEvenOrOdd(3) ➞ "odd"

isEvenOrOdd(146) ➞ "even"

isEvenOrOdd(19) ➞ "odd"
*/

function isEvenOrOdd($num) {
  return $num % 2 === 0 ? 'even' : 'odd';
}
?>
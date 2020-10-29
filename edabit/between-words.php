<?php
/*
Between Words
source: edabit
https://edabit.com/challenge/NtJioPEo2Xy4r8KGb

Write a function that takes three string arguments (first, last, and word) 
and returns true if word is found between first and last in the dictionary, otherwise false.

**Examples

isBetween("apple", "banana", "azure") ➞ true

isBetween("monk", "monument", "monkey") ➞ true

isBetween("bookend", "boolean", "boost") ➞ false
*/

function isBetween($first, $last, $word) {
  return $word > $first &&  $word < $last;
}
?>
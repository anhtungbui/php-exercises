<?php
/*
Return Something to Me!
source: edabit

Write a function that returns the string "something" joined with a space " " and the given argument a.

**Examples

giveMeSomething("is better than nothing") ➞ "something is better than nothing"

giveMeSomething("Bob Jane") ➞ "something Bob Jane"

giveMeSomething("something") ➞ "something something"
*/

function giveMeSomething($str) {
  return "something " . $str;
  // return "something $str";
}
?>
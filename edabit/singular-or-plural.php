<?php
/*
Is the Word Singular or Plural?
source: edabit 
https://edabit.com/challenge/z2gE4ufR8juySWWTJ

Create a function that takes in a word and determines whether or not it is plural. 
A plural word is one that ends in "s".

**Examples

isPlural("changes") ➞ true

isPlural("change") ➞ false

isPlural("dudes") ➞ true

isPlural("magic") ➞ false
*/

function isPlural($str) {
  return substr($str, -1) === 's';
}
?>
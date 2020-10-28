<?php
/*
Get Word Count
source: edabit
https://edabit.com/challenge/LmcWKXz98bmRssH9a

Create a function that takes a string and returns the word count. The string will be a sentence.

**Examples

countWords("Just an example here move along") ➞ 6

countWords("This is a test") ➞ 4

countWords("What an easy task, right") ➞ 5
*/

function countWords($str) {
  $words = explode(" ", $str);
  return count($words);
  // return str_word_count($str);
}
?>
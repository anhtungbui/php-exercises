<?php
/*
Re-Form the Word
source: edabit
https://edabit.com/challenge/ToGTqrjek2PviZLkQ

A word has been split into a left part and a right part. Re-form the word 
by adding both halves together, changing the first character to an uppercase letter.

**Examples

get_word("seas", "onal") ➞ "Seasonal"

get_word("comp", "lete") ➞ "Complete"

get_word("lang", "uage") ➞ "Language"
*/

function get_word($left, $right) {
  $word = "$str1$str2";
  return ucfirst($word);
  // return ucwords($left . $right);
}
?>
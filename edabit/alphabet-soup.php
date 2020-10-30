<?php
/*
Alphabet Soup
source: edabit
https://edabit.com/challenge/2kaEZ284HBeq8ofY3

Create a function that takes a string and returns a string with its letters in alphabetical order.

**Examples

AlphabetSoup("hello") ➞ "ehllo"

AlphabetSoup("edabit") ➞ "abdeit"

AlphabetSoup("hacker") ➞ "acehkr"

AlphabetSoup("geek") ➞ "eegk"

AlphabetSoup("javascript") ➞ "aacijprstv"
*/

function AlphabetSoup($str) {
  $arr = str_split($str);
  sort($arr);
  $str = implode("", $arr);
  // return implode($arr);
  return $str;
}

?>
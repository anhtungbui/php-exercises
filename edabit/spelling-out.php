<?php
/*
Spelling it Out
source: edabit
https://edabit.com/challenge/yv9nNp9tHhSWeKuWN

Create a function which takes in a word and spells it out, by consecutively adding letters until the full word is completed.

**Examples

spelling("bee") ➞ ["b", "be", "bee"]

spelling("happy") ➞ ["h", "ha", "hap", "happ", "happy"]

spelling("eagerly") ➞ ["e", "ea", "eag", "eage", "eager", "eagerl", "eagerly"]
*/

function spelling($str) {
  $result = [];
  for ($i = 1; $i <= strlen($str); $i++) {
    array_push($result, substr($str, 0, $i));
  }

  return $result;
}
?>
<?php
/*
Return the Four Letter Strings
source: edabit
https://edabit.com/challenge/49Jj8gZqZhS9nWtwM

Create a function that takes an array of strings and returns the words that are exactly four letters.

**Examples

isFourLetters(["Tomato", "Potato", "Pair"]) ➞ ["Pair"]

isFourLetters(["Kangaroo", "Bear", "Fox"]) ➞ ["Bear"]

isFourLetters(["Ryan", "Kieran", "Jason", "Matt"]) ➞ ["Ryan", "Matt"]
*/

// SOLUTION 1
function isFourLetters($arr) {
  $result = [];
  foreach($arr as $word) {
    if (strlen($word) == 4) {
      array_push($result, $word);
    }
  }

  return $result;
}

// saved SOLUTION 2
function isFourLettersV2($arr) {
  return array_values(preg_filter('/^(\w{4})$/', '$0', $arr));
}

// saved SOLUTION 3
function isFourLetters($arr) {
  return array_values(array_filter($arr, function($e){ return strlen($e)==4; }));
}
?>
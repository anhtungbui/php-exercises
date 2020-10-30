<?php
/*
Count the Letters and Digits
source: edabit
https://edabit.com/challenge/A8cTMAX34Gr9wzDkN

Write a function that takes a string and calculates the number of letters and digits within it. Return the result as an array.

**Examples

countAll("Hello World") ➞ array("LETTERS" =>  10, "DIGITS" => 0)

countAll("H3ll0 Wor1d") ➞ array("LETTERS" =>  7, "DIGITS" => 3)

countAll("149990") ➞ array("LETTERS" => 0, "DIGITS" => 6)
*/

function countAll($str) {
  $lettersCount = preg_match_all("/[a-z]/i", $str);
  $digitsCount = preg_match_all("/\d/", $str);

  return ["LETTERS" => $lettersCount, "DIGITS" => $digitsCount];
  // return ["LETTERS" =>  preg_match_all('/[a-z]/i', $str), "DIGITS" => preg_match_all('/\d/i', $str)];
}
?>
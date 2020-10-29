<?php
/*
H4ck3r Sp34k
source: edabit
https://edabit.com/challenge/SXbLyk36ahJabBQ24

Create a function that takes a string as an argument and returns a coded (h4ck3r 5p34k) version of the string.

**Examples

hackerSpeak("javascript is cool") ➞ "j4v45cr1pt 15 c00l"

hackerSpeak("programming is fun") ➞ "pr0gr4mm1ng 15 fun"

hackerSpeak("become a coder") ➞ "b3c0m3 4 c0d3r"

**Notes

In order to work properly, the function should replace all "a"s with 4, 
"e"s with 3, "i"s with 1, "o"s with 0, and "s"s with 5.
*/

// SOLUTION 1
function hackerSpeak($str) {
  $result = str_replace('a', '4', $str);
  $result = str_replace('e', '3', $result);
  $result = str_replace('i', '1', $result);
  $result = str_replace('o', '0', $result);
  $result = str_replace('s', '5', $result);
  return $result;
}

// saved SOLUTION 2
function hackerSpeakV2($str) {
	return strtr($str, ['a' => 4, 'e' => 3, 'o' => 0, 's' => 5, 'i' => 1]);
}

// saved SOLUTION 3
function hackerSpeakV3($str) {
	return str_replace(['a','e','i','o','s'], [4,3,1,0,5], $str);
}

// saved SOLUTION 4
function hackerSpeakV4($str) {
	$searchArray = ['a', 'i', 'e', 's', 'o'];
	$replaceArray = ['4', '1', '3', '5', '0'];
	return str_replace($searchArray, $replaceArray, $str);
}

?>


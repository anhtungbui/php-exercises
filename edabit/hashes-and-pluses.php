<?php
/*
Hashes and Pluses
source: edabit
https://edabit.com/challenge/CEAo98DzQ4vHQCfj7

Create a function that returns the number of hashes and pluses in a string.

**Examples

hashPlusCount("###+") ➞ [3, 1]

hashPlusCount("##+++#") ➞ [3, 3]

hashPlusCount("#+++#+#++#") ➞ [4, 6]

hashPlusCount("") ➞ [0, 0]

**Notes
Return [0, 0] for an empty string.
Return in the order of [hashes, pluses].
*/

// SOLUTION 1
function hashPlusCount($str) {
  $hashCount = preg_match_all("/#/", $str);
  $plusCount = preg_match_all("/\+/", $str);
  return [$hashCount, $plusCount];
}

// SOLUTION 2
function hashPlusCountV2($str) {
	$hashes = substr_count($str, '#');
	$pluses = substr_count($str, '+');
	return [$hashes, $pluses];
}
?>
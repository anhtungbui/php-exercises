<?php
/*
How Many D's Are There?
source: edabit
https://edabit.com/challenge/mJWNW2nj49fyZgwf5

Create a function that counts how many D's are in a sentence.

**Examples

count_d("My friend Dylan got distracted in school.") ➞ 4

count_d("Debris was scattered all over the yard.") ➞ 3

count_d("The rodents hibernated in their den.") ➞ 3
*/

// SOLUTION 1
function count_d($str) {
  $dCount = 0;
  for($i = 0; $i < strlen($str); $i++) {
    if ($str[i] === 'd' || $str[i] === 'D') {
      $dCount++;
    }
  }

  return $dCount;
}

// SOLUTION 2
function count_d_v2($str) {
  $regex = "/d/i";
  return preg_match_all($regex, $str);
}

// SOLUTION 3
function count_d_v3($sentence) {
  return substr_count($sentence, "d");
}
?>
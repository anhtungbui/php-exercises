<?php
/*
Capitalize the Names
source: edabit
https://edabit.com/challenge/4uEox3w945f8skbwN

Create a function that takes an array of names and returns an array 
where only the first letter of each name is capitalized.

**Examples

capMe(["mavis", "senaida", "letty"]) ➞ ["Mavis", "Senaida", "Letty"]

capMe(["samuel", "MABELLE", "letitia", "meridith"]) ➞ ["Samuel", "Mabelle", "Letitia", "Meridith"]

capMe(["Slyvia", "Kristal", "Sharilyn", "Calista"]) ➞ ["Slyvia", "Kristal", "Sharilyn", "Calista"]
*/

// SOLUTION 1
function capMe($arr) {
  $result = [];

  foreach($arr as $word) {
    $word = strtolower($word);
    array_push($result, ucfirst($word));
  }

  return $result;
}

// saved SOLUTION 2
function capMeV2($arr) {
  return array_map('ucfirst', array_map('strtolower', $arr));
}

// saved SOLUTION 3
function capMeV3($arr) {
  return array_map(function($a) {
    $lowercase = strtolower($a);
    return ucfirst($lowercase);
  },$arr);
}

?>
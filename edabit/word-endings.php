<?php
/*
Word Endings
source: edabit
https://edabit.com/challenge/Hiu7NLE3LP3P7to6d

Create a function that adds a string ending to each member in an array.

**Examples

addEnding(["clever", "meek", "hurried", "nice"], "ly")
➞ ["cleverly", "meekly", "hurriedly", "nicely"]

addEnding(["new", "pander", "scoop"], "er")
➞ ["newer", "panderer", "scooper"]

addEnding(["bend", "sharpen", "mean"], "ing")
➞ ["bending", "sharpening", "meaning"]
*/

// SOLUTION 1
function addEnding($arr, $sending) {
  $result = [];
  foreach($arr as $word) {
    array_push($result, $word.$ending);
  }

  return $result;
}

// saved SOLUTION 2
function addEndingV2($arr, $ending) {
	return preg_filter('/$/', $ending, $arr);
}
?>
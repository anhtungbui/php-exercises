<?php
/*
Is the String Empty?
source: edabit 

Create a function that returns true if a string is empty and false otherwise.

**Examples

isEmpty("") ➞ true

isEmpty(" ") ➞ false

isEmpty("a") ➞ false
*/

function isEmpty($str) {
  return strlen($str) === 0;

  // return empty($str);
  // return $str == "";
}

?>
<?php

class Validator {
  // pure function
  public static function string($value, $min = 0, $max = INF) {
    $value = trim($value);
    if (!is_string($value) || strlen($value) <= $min || strlen($value) > $max) {
      return false;
    } else {
      return true;
    }
  }
}
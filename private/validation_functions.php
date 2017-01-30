<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    // Function can be improved later to check for
    // more than just '@'.
    return strpos($value, '@') !== false;
  }

  // has_valid_phone_number('555-555-5555')
  function has_valid_phone_number($value) {
    // Return true if value only contains 0-9, spaces, and ()- 
    return preg_match("/^[0-9-() ']+$/ ", $value);
  }

  // Custom Validation for state codes
  // Checks if all the letters in value are capital
  function has_valid_state_code($value) {
    return ctype_upper($value);
  }

  // Custom validation for territory positions
  function has_valid_territory_position($value) {
    return is_numeric($value);
  }

  // Custom validation for names (A-Z, a-z, -)
  function has_valid_name($value) {
    return preg_match("/^[A-Za-z- ']+$/ ", $value);
  }

  // Custom validation for username (A-Z, a-z, 0-9, and _)
  function has_valid_username($value) {
    return preg_match("/^[A-Za-z0-9_']+$/ ", $value);
  }

  // Custom validation for positive numbers
  function is_positive($value) {
    return $value > 0;
  }
?>

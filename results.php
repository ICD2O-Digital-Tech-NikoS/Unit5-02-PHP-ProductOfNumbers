<?php
  // get user input 
  $userNumberTwo = $_POST["userNumberTwo"];
  // get user input
  $userNumberOne = $_POST["userNumberOne"];
  //sets sum of nubmers to zero
  $sum = 0;

  // if both numbers are greater than zero 
  if ($userNumberOne > 0 && $userNumberTwo > 0) {
    for ($counter = 0; $counter < $userNumberTwo; $counter++) {
      if ($counter < $userNumberTwo) {
        $sum = $sum + $userNumberOne;
      }
    }
  }
  // if both numbers are less than zero
  if ($userNumberOne < 0 && $userNumberTwo < 0) {
    for ($counter = 0; $counter < abs($userNumberTwo); $counter++) {
      if ($counter < abs($userNumberTwo)) {
        $sum = $sum - $userNumberOne;
      }
    }
  }
  // if one number is less than zero
  if ($userNumberOne < 0 || $userNumberTwo < 0) {
    // Find the positive number
    $positiveNumber = max($userNumberOne, $userNumberTwo);
    // Find the negative number
    $negativeNumber = min($userNumberOne, $userNumberTwo);

    // for if the counter is less than the absolute value of the negative number, run the code that adds the absolute value of the negative number to the sum, and then repeat until the counter is not less than the absolute value of the negative number.
    for ($counter = 0; $counter < $positiveNumber; $counter++) {
      $sum = $sum - abs($negativeNumber);
    }
  }
  // display the product
  echo "The product of the numbers is " . $sum;

?>
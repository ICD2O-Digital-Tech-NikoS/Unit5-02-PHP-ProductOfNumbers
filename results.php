<?php
  // get user input for min
  $userNumberTwo = $_POST["userNumberTwo"];
  // get user input for max
  $userNumberOne = $_POST["userNumberOne"];
  // empty string for displaying numbers
  $sum = 0;

  // while counter is not equal to userMax, update the counter unti it is equal to userMax
  if ($userNumberOne > 0 && $userNumberTwo > 0) {
    for ($counter = 0; $counter < $userNumberTwo; $counter++) {
      if ($counter < $userNumberTwo) {
        $sum = $sum + $userNumberOne;
      }
    }
  }
  if ($userNumberOne < 0 && $userNumberTwo < 0) {
    for ($counter = 0; $counter < Math.abs($userNumberTwo); $counter++) {
      if ($counter < Math.abs($userNumberTwo)) {
        $sum = $sum - $userNumberOne;
      }
    }
  }
  if ($userNumberOne < 0 || $userNumberTwo < 0) {
    // Find the positive number
    $positiveNumber = Math.max($userNumberOne, $userNumberTwo);
    // Find the negative number
    $negativeNumber = Math.min($userNumberOne, $userNumberTwo);

    // for if the counter is less than the absolute value of the negative number, run the code that adds the absolute value of the negative number to the sum, and then repeat until the counter is not less than the absolute value of the negative number.
    for ($counter = 0; $counter < $positiveNumber; $counter++) {
      $sum = $sum - Math.abs($negativeNumber)
    }
  }
  
  echo "The product of the numbers is " . $sum;

?>

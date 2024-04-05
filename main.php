<?php
  /* This program finds the max run of a string
  * By Venika Sem
  * @version 1.0
  * @since Feb-2024
  */
  
  function maxRunFunction($inputStr) {
    $maxRun = 0;
    $currentRun = 1;
  
    for ($i = 0; $i < strlen($inputStr) - 1; $i++) { // Adjusted loop condition
      if ($inputStr[$i] === $inputStr[$i + 1]) {
        $currentRun++;
        if ($currentRun > $maxRun) {
          $maxRun = $currentRun;
        }
      } else {
          $currentRun = 1;
      }
    }
  
    return $maxRun;
  }
  
  $inputStr = readline("Enter a string: ");
  
  if (strlen($inputStr) > 0) {
    $maxRun = maxRunFunction($inputStr);
    echo "The string \"$inputStr\" has a max run of $maxRun!\n";
  } else {
    echo "Invalid input.\n";
  }
  echo "\nDone.";
?>

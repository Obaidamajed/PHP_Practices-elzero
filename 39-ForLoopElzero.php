<?php

  /*
    Control Structure
    - Loop

    For
    - Expression One Run Once At The First Of The Loop
    - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Are Executed
  */

  $i = 1;

  while ($i <= 3) {

    echo "$i<br>";

    $i++;

  }

  echo '##### <br>';
  // for (start; condition; steps)
  for ($i = 1; $i <= 3; $i++) {

    echo "$i<br>";

  }

  echo '##### <br>';

  // the same for loop but another syntax
  $index = 1; // start

  for (;;) :

    if ($index == 4) { // condition

      break;

    }

    echo "$index<br>";

    $index++; // steps

  endfor;
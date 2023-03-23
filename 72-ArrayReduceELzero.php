<?php

  /*
    Array Functions

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration

  */

  function add($carry, $item) {
    // $carry هي الانيشيال فاليو
    // $item هي الآيتم الحالي اللي بعملي عليه العملية في الوقت الحالي
    echo "$carry<br>";
    echo "$item<br>";
    echo $carry + $item . "<br>";
    echo "###########<br>";
    return $carry + $item;
  }

  $nums = [10, 20, 50, 100, 10];

  echo array_reduce($nums, "add", 100); // كتب ايكو لانو برجع سنقل فاليو
  // 100 انيشيال فاليو 


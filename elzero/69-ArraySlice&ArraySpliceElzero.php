<?php

  /*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Have String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position

  */


  $Team = ["A", "B", "C", "D", "E", "F", "G"];
  $Team_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
  $Team_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

  echo "<h2>Slice</h2>";
  echo "<hr>";
  echo '<pre>';
  print_r(array_slice($Team, 2)); // حيقطع من اندكس رقم 2 للنهاية
  print_r(array_slice($Team, -4));
  print_r(array_slice($Team, 2, 3)); // حيقطع من اندكس رقم 2 وبعد من عندو 3 اندكس
  print_r(array_slice($Team, 2, -2)); // بقطع من اندكس رقم 2 للنهاية ما عدا آخر اثنين إندكس
  echo '</pre>';

  echo '<pre>';
  print_r(array_slice($Team_with_string_keys, 0, 2));
  print_r(array_slice($Team_with_numeric_keys, 0, 2));
  print_r(array_slice($Team_with_numeric_keys, 0, 2, True));//True هيك بحافظ عالكاي اللي في الارراي الاصلي
  echo '</pre>';

  echo '<pre>';
  print_r($Team); // Slice ما بتشوه الأرراي الأصلية
  echo '</pre>';


  echo "<h2>Splice</h2>";
  echo "<hr>";
  $nums = [10, 20, 30, 40, 50, 60, 70];

  echo '<pre>';
  print_r(array_splice($nums, 2, -1));
  print_r($nums); // Splice بشوه الأرراي الأصلية
  echo '</pre>';

  echo "<h3>Another array</h3>";
  $charachters = [1,2,3,4,5,6,7];
  echo '<pre>';
  print_r(array_splice($charachters, 2, 1, "Three")); // من عند اندكس 2 بشيل عنصر وبحط بدالو سترنق ثري
  print_r($charachters);
  echo '</pre>';
  
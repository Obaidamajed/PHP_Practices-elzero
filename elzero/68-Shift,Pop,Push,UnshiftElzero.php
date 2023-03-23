<?php

  /*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */


  $chars = ["A", "B", "C", "D"];

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $first = array_shift($chars); //بقطع اول عنصر بالأرراي

  echo "$first<br>"; // "A" 

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $last = array_pop($chars); // يقطع ااخر عنصر بالأرراي

  echo "$last<br>"; // "D"

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_push($chars, "X", "Y", "Z"); // بضيف من الاخر

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_push($chars, "1");

  $chars[] = "1"; // بالطريقة هاي أسرع بإضافة عنصر واحد فقط بداخل الأرراي

  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_unshift($chars, "One", "Two", "Three"); // بضيف في البداية

  echo '<pre>';
  print_r($chars);
  echo '</pre>';
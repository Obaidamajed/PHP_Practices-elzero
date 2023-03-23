<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - precedence الاولوية
    - "&&" Has A Greater Precedence Than "and"
  */

  echo 2 + 4 * 5; // 22
  echo '<br>';
  echo (2 + 4) * 5; // 30
  echo '<br>';
  echo 10 || false || 0 || [] || ""; // True => 1
  // اي رقم ما عدا الصفر يُعتبر ترو 
  // false, 0, [], "" هدول كلهم فولس
  echo '<br>';
  echo true; // 1
  echo '<br>';
  var_dump(10 || false || 0 || [] || ""); // True
  echo '<br>';
  echo 10 || false; // 1
  echo '<br>';

  $a = 10 || false; // $a = (10 || false) => $a = 1
  // the precedence here to ||
  echo $a; // 1

  echo '<br>';
  
  $b = 10 or false; // ($b = 10) or false
  // the precedence here to =
  echo $b; // 10

  echo '<br>';

  $c = false or 10;
  echo $c;

  echo '<br>';

  $c = 5 or 10;
  echo $c;




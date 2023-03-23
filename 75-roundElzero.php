<?php

  /*
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double ********************************
  */

  echo round(5.99) . "<br>";
  echo round(5.50) . "<br>";
  echo round(5.49) . "<br>";
  echo round(5.10) . "<br>";

  echo round(5.99, 1) . "<br>"; // 6 بقرب اول عدد عشري 
  echo round(5.94, 1) . "<br>"; // 5.9
  echo round(5.995, 2) . "<br>"; // 6 بقرب العدد العشري الثاني
  echo round(5.994, 1) . "<br>"; // 6
  echo round(5.994, 2) . "<br>"; // 5.99

  echo "<hr>";
  echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
  echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";
  echo "<hr>";
  
  echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>"; // 5
  echo round(5.51, 0, PHP_ROUND_HALF_DOWN) . "<br>"; // 6
  echo "<hr>";
  
  echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // بقربو لأقرب عدد زوجي 6
  echo round(5.49, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // 5
  echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // بقربو لأقرب عدد زوجي 4
  echo round(4.40, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // 4
  echo "<hr>";
  
  echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>"; // بقرب لأقرب عدد فردي
  echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
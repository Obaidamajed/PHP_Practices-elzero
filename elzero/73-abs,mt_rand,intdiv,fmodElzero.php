<?php

  /*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */

  echo abs(10) . "<br>";
  echo abs(0) . "<br>";
  echo abs(-20) . "<br>";
  echo "<hr>";

  echo rand() . "<br>";
  echo mt_getrandmax() . "<br>"; // اكبر رقم ممكن يجيبو
  echo rand(50, 60) . "<br>"; // بجيبلي رقم عشوائي بين الرقمين هدول

  echo "<hr>";
  echo 10 / 5 . "<br>";
  echo gettype(10 / 5) . "<br>";
  echo "<hr>";
  
  echo 11 / 5 . "<br>";
  echo gettype(11 / 5) . "<br>";
  echo "<hr>";
  
  echo intdiv(11, 5) . "<br>"; // برجعلي رقم صحيح 2
  echo gettype(intdiv(11, 5)) . "<br>";
  echo "<hr>";
  
  echo 11.5 % 5 . "<br>"; // برجع الباقي 1 
  echo gettype(11 % 5) . "<br>";
  echo "<hr>";

  echo fmod(11.5, 5) . "<br>"; // fmod برجع نوع البيانات فلوت/دوبل
  // برجع الباقي 1.5
  echo gettype(fmod(11.5, 5)) . "<br>";
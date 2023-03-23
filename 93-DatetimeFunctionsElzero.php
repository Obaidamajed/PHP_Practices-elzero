<?php

  /*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */

  date_default_timezone_set("Asia/Amman");

  // $d = date_create("2022-10-01 15:5:3");
  $d = date_create();

  // Year
  echo date_format($d, "Y") . "<br>"; // 2022
  echo date_format($d, "y") . "<br>"; // 22
  echo "<hr>";
  
  // Month
  echo date_format($d, "Y-m") . "<br>"; // بطبع السنة والشهر بطبعو ك رقم
  echo date_format($d, "Y-M") . "<br>"; // بطبع السنة والشهر بطبعو ك حروف , 3 حروف
  echo date_format($d, "Y-F") . "<br>"; // بطبع السنة والشهر بطبعو ك حروف
  echo date_format($d, "t") . "<br>"; // بجيب عدد الايام في الشهر 
  echo "<hr>";
  
  // Day
  echo date_format($d, "Y-m-d") . "<br>"; // d بجيب اليوم ك رقم من خانتينو, بظهر اختلافو عالأرقام اللي اقل من 10
  echo date_format($d, "Y-m-j") . "<br>"; // j بجيب اليوم ك رقم من خانة, بظهر اختلافو عالأرقام اللي أقل من 10 
  echo date_format($d, "Y-m-D") . "<br>"; // D بجيب اليوم ك حروف من 3 حروف
  echo date_format($d, "Y-m-l") . "<br>"; // l بجيب اليوم كامل ك حروف 
  echo date_format($d, "Y-m-l z") . "<br>"; // z بجيب اليوم رقم كم من السنة ؟
  echo date_format($d, "Y-m-l djDl") . "<br>"; // بقدر أكتب الرموز بالطريقة اللي بدي اياها وبالشكل اللي بدي اياه يطلع فيه عادي
  echo date_format($d, "Y-m-l S") . "<br>"; // S بجيبلك اليوم من الشهر

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
  echo date_format($d, "Y-m") . "<br>";
  echo date_format($d, "Y-M") . "<br>";
  echo date_format($d, "Y-F") . "<br>";
  echo date_format($d, "t") . "<br>"; // 30
  
  echo "<hr>";
  // Day
  echo date_format($d, "Y-m-d") . "<br>";
  echo date_format($d, "Y-m-j") . "<br>";
  echo date_format($d, "Y-m-D") . "<br>";
  echo date_format($d, "Y-m-l") . "<br>";
  echo date_format($d, "Y-m-l z") . "<br>";
  echo date_format($d, "Y-m-l djDl") . "<br>";
  echo date_format($d, "Y-m-l S") . "<br>";
  
  echo "<hr>";
  // Time
  echo date_format($d, "Y-m-d g a") . "<br>";//g بعرض الوقت بنظام ال12 ساعة 
  // a بعرض الآي إم والبي إم لكن حروف صغيرة 
  echo date_format($d, "Y-m-d g A") . "<br><br>";

  echo date_format($d, "Y-m-d h a") . "<br><br>";//h نفس ال جي لكن هون بعرضلي الرقم من خانتين في حال كان اقل من 10 

  echo date_format($d, "Y-m-d G") . "<br>";//G بعرض الوقت بنظام ال24 ساعة
  echo date_format($d, "Y-m-d H") . "<br><br>";//H نفس الاشي لكن بعرض الوقت من خانتين في حال كان اقل من 10

  echo date_format($d, "Y-m-d H/i/s") . "<br>";
  echo date_format($d, "Y-m-d H/i/s u") . "<br>"; // u بجيب المايكرو سكند
  
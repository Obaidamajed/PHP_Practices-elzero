<?php

  /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */

  $friends = ["Ahmed", "Osama", "Ali", "Salem"];

  echo implode(" ", $friends) . "<br>";
  echo implode(", " , $friends) . "<br>"; //implode بتجمع عناصر الارراي في سترنج واحد وبتقدر تحدد الفاصل البين العناصر
  echo implode("@@", $friends) . "<br>";
  echo implode($friends) . "<br>";

  $str = "Elzero Web School Is Cool";

  echo "<pre>";
  print_r(explode(" ", $str));// explode بحول السترنج ل أرراي , يعني عكس الإمبلود بعمل
  // " " بتحدد كيف بدك تفصل كل فاليو عن الثاني في الأرراي, يعني هون فصلت كل فاليو عن التثاني من السبيس اللي بيناتهم بالسترنق الأصلي
  echo "</pre>";

  echo "<pre>";
  print_r(explode("I", $str)); // هون فصلت بيناتهم من حرف حرف الأاي 
  echo "</pre>";

  echo "<pre>";
  print_r(explode(" ", $str, 3)); // برجع اول 3 عناصر
  echo "</pre>";

  echo "<pre>";
  print_r(explode(" ", $str, -2)); // -2 برجع كل العناصر ما عدا ااخر عنصرين
  echo "</pre>";

  echo str_shuffle("Elzero") . "<br>"; //str_shuffle بخربط الاحرف
  echo strrev("Elzero") . "<br>"; // strrev بقلب الاحرف

  echo strlen("   Elzero  ") . "<br>";
  echo strlen(trim("   Elzero  ")) . "<br>"; //trim بتحذف السباس من اليمين واليسار
  echo "-------------------<br>";
  echo trim("#@@Elzero@@@###", "#") . "<br>";
  echo trim("#@@Elzero@@@###", "@") . "<br>"; //trim بحذف من اليمين واليسار فقط , ما بدخل داخل السترنق , بحذف الأطراف

  echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
  echo ltrim("#@@Elzero@@@###", "#@") . "<br>";
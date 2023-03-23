<?php

  /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */

  $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

  echo strlen($str) . "<br>";

  echo wordwrap($str, 8, "<br>", True); // كل 8 احرف بحطهم بسطر لحال
  // True بعمل قطع للكلمات الكبيرة(الاكبر من 8 احرف) , بدونها الكلمة الكبيرة م بتنفصل 
  echo "<br>";

  echo ord("a"); // 97

  echo "<br>";

  echo chr(97); // a

  echo "<br><hr>";

  echo similar_text("Elz@ero", "Elz_eroo"); // بحسب الاحرف المتشابهة

  echo "<br>";

  echo similar_text("Elzero", "Elzeroo", $perc);

  // $perc بيتخزن بالمتغير هذا نسبة التشابه بين السترنقين
  echo "<br>";

  echo $perc;
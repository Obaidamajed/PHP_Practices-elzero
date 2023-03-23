<?php

  /*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */

  var_dump(strpos("Hello Hello", "H")); // 0, strpos برجع موقع الحرف
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 3)); // 6, رح أبدأ بحث من إندكس رقم 3 
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 6)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "h")); // False, لأنو الحرف غير موجود
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -2)); // False, ببدا عد من الإندكس قبل الأخير
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -5)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -11)); // 0
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H")); // 6, strrpos بجيب اخر إتش بلاقيها
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H", 5)); // 6
  echo '<br>';
  var_dump(stripos("Hello Hello", "h")); // 0, stripos غير حساسة للأحرف
  echo '<br>';
  var_dump(strripos("Hello Hello", "h")); // 6
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He")); // 2,substr_count بعد الفاليو اللي بعطيه كم مرة موجود بالسترنق اللي بعطيه أيضا
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1)); // 1, حيبدا بحث من الاندكس رقم 1
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0,حيبدا بحث من الاندكس رقم واحد ولغاية 6 اندكس من عندو 
  echo '<br>';
  var_dump(substr_count("abcdabcda", "abcda")); // 1
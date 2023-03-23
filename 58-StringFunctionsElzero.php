<?php

  /*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */

  parse_str("name=Osama&email=o@nn.sa&os=mac", $query);//parse_str(string, array)
  // parse_str سترنج برجعو ك ارراي بخزنو في المتغير كويري

  echo '<pre>';
  print_r($query);
  echo '</pre>';

  echo $query["name"] . "<br>";
  echo $query["email"] . "<br>";
  echo $query["os"] . "<br>";

  echo "Hello [] () * + . <br>";
  echo quotemeta("Hello [] () * + . <br>");//quotemeta بتعمل إسكاب للكراكتار اللي ممكن يعمل مشكلة في الداتا بايس

  echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";//str_pad ع فرض بدي يتكون من 8 كركتر, بعبيلي اياهم حسب ما انا بحدد وكمان انا بحدد اذا يعبيلي من اليمين او اليسار الجهتين مع بعض
  echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
  echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";

  echo strtr("E@zero Web Schoo@", "@", "l"); // strtr ببدل الحرف اللي بدي اياه بالحرف اللي بدي اياه 

  echo "<br>";

  $translation = ["@" => "l", "#" => "o"]; 

  echo strtr("E@zer# Web Sch##@", $translation); // ببدل حرفين بحرفين انا حددتهم
  
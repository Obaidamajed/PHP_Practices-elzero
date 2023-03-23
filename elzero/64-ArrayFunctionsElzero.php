<?php

  /*
    Array Functions

    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists

  */

  $family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];

  echo '<pre>';
  print_r($family);
  print_r(array_reverse($family, True));//True بسببها رح يحتفظ كل فاليو بالإندكس تبعو لما يعمل للأرراي ريفيرس
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_flip($countries)); // بتحط الكاي مكان الفاليو
  echo '</pre>';

  $counting = [
    "A",
    "B",
    "C",
    [1, 2, 3]
  ];

  echo count($counting); // بعد عناصر الأرراي
  echo '<br>';
  echo count($counting, 1); // بعد العناصر والعناصر اللي بداخل النيستيد أرراي

  echo '<br>';

  $search = ["1", 2, 3, 4];

  if (in_array(1, $search, True)) { // اذا الرقم واحد موجود بالأرراي, الرقم واحد سواء كان سترنج او نمبر .. بدون ما اكتب ترو
    // True هيك بتأكدلي من النوع وبالتالي ما رح يلاقي الرقم واحد وبالتالي ما حيطبع إشي
    echo "The Element Is Found";
  }

  echo '<br>';

  $courses = [
    "Javascript" => 95,
    "PHP" => 100,
    "HTML" => 60,
    "CSS" => 65
  ];

  if (array_key_exists("PHP", $courses)) {//ببحث عن الكاي بهادا الأرراي اذا انها موجود
    echo "The Course Is Found And The Price Is: " . $courses["PHP"];
  }
<?php

  /*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */

  echo substr_replace("OneTwo", 1, 0); // 1, بدا من الاندكس صفر وغيرو لرقم 1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 3); // One1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 5); // OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 1, -1); // OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2); // On2
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2, 2); // On2wo, بدا من الاندكس رقم 2 وعد 2 اندكس من عندو وبعدين بدلهم ب 2 
  echo '<br>';
  echo substr_replace("OneTwo", 2, 1, 4); // O2o
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al eb_School,  الاندكس رقم 7 بدلتو ب حرف آي وبعدين جبت آخر حرف بعديه وبعدين كمل باقي السترنق عادي
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School, محل الاندكس رقم واحد ضيفلي علامة ال @ وبعدين كمل باقي الاندكس بدون ما تحذف او تستبدل اشي

  echo "<pre>";
  print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0)); // حيبدل عناصر الارراي من الاندكس رقم صفر
  echo "</pre>";
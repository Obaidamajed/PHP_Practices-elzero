<?php

  /*
    Array Functions

    - sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function

  */

  $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];

  sort($names); // برتب الفاليو تصاعدي حسب الاحرف

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  rsort($names); // برتبهم تنازلي , يعني بالعكس

  echo '<pre>';
  print_r($names);
  echo '</pre>';

  $countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

  asort($countries); // برتبهم تصاعدي حسب الفاليو

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  arsort($countries); // برتبهم تنازلي حسب الفاليو

  echo '<pre>';
  print_r($countries);
  echo '</pre>';

  $codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

  ksort($codes); // برتبهم تصاعدي بناءا على الكاي

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  krsort($codes); // برتبهم تنازلي حسب الكاي

  echo '<pre>';
  print_r($codes);
  echo '</pre>';

  $files = ["Photo1.png", "Photo20.png", "Photo3.png"];

  sort($files); // برتبهم تصاعدي وبوخذ اول خانة للرقم بعين الاعتبار فقط

  echo '<pre>';
  print_r($files);
  echo '</pre>';

  natsort($files); // هون برتلي اياهم تصاعدي بشكل صحيح , يعني بوخذ بعين الاعتبار قيمة الرقم كامل 

  echo '<pre>';
  print_r($files);
  echo '</pre>';
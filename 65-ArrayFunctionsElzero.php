<?php

  /*
    Array Functions

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array

  */

  $friends = ["Amro","Talab", "Asem", "Abdelmajed", "Nuqeite", "Amro", "Haneen", 1, "1"];

  echo "<h2>array_keys</h2>";
  echo '<pre>';
  print_r(array_keys($friends)); // برجعلي أرقام الكايز ك فاليو في أرراي والكايز في الأرراي الجديدة هاي برتبلي اياهم بشكل اوتوماتيكي من الصفر
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, "Amro"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, "1", true));//true بدقق عالنوع هون
  echo '</pre>';
  echo "#################################################";

  $countries = ["Jo" => "Jordan", "Tu" => "Turkish", "Aq" => "Aqaba", "Am" => "Amman"];

  echo "<h2>array_values</h2>";
  echo '<pre>';
  print_r(array_values($countries));// برجعلي الفاليو
  echo '</pre>';
  echo "#################################################";


  $pad = ["A", "B", "C", "D"];

  echo "<h2>array_pad</h2>";
  echo '<pre>';
  print_r(array_pad($pad, 10, "Haneen"));
  // 10 print at ending
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, -10, "shaimaa"));//-10 برتب من البداية
  // -10 print at beginning
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, 2, "@"));
  // print 4 elements (original array)
  echo '</pre>';
  echo "#################################################";


  $product = [10, 5, 2, 10];

  echo "<h2>array_product</h2>";
  echo array_product($product) . "<br>";
  echo "#################################################";


  $sum = [10, 5, 2, 10];

  echo "<h2>array_sum</h2>";
  echo array_sum($sum);

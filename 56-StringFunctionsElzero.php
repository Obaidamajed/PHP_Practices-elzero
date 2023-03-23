<?php

  /*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */

  echo chunk_split("Elzero Web School", 3, "@"); // كل 3 احرف افصلهم لحالهم وبيناتهم @ ز
  echo '<br>';

  echo '<pre>';
  print_r(str_split("Elzero"));//str_split بتحول السترنق ل ارراي 
  echo '</pre>';

  echo '<pre>';
  print_r(str_split("Elzero", 2)); // هون حددتلو اللينقث لكل عنصر من عناصر ال ارراي
  echo '</pre>';

  echo "<h3>Hello <b>Elzero</b></h3>";
  echo '<br>';

  echo strip_tags("<h3>Hello <b>Elzero</b></h3>"); //اي تاق بتكتبها بتجاهلها
  echo '<br>';

  echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3><b>"); // هون كتبت التاق اللي بدي اياه يوخذهم بعين الاعتبار
  echo '<br>';

  echo nl2br("Elzero\nWeb\nSchool", false);//false هاي حتى احذف السلف كلوز تاق من الباج سورس, مش مهمة حسيت ^^
  
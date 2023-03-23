<?php

  /*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */

  echo basename(__FILE__) . "<br>"; // 85-basename,dirname,realpath,pathinfoElzero.php or __FILE__
  // بعطيني اسم الملف اللي انا فيه
  echo basename(__FILE__, ".php") . "<br>"; // اذا لقى امتداد ال بي أتش بي حيشيلو

  echo dirname(__FILE__, 3) . "<br>"; // بعطيني امتداد الملف
  // 3 جرب 1 و 2 و 4 و 5 
  echo realpath(__FILE__) . "<br>"; // بجيبلك المسار كامل لحد ما يوصل للملف اللي انا فيه

  echo "<pre>";
  print_r(pathinfo(__FILE__)); // برجعلي كل معلومات خاصة بالفايل اللي انا فيه ع شكل أرراي
  echo "</pre>";

  echo pathinfo(__FILE__)["extension"] . "<br>";
  echo pathinfo(__FILE__)["dirname"] . "<br>";

  echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>"; // جبتو الدايكتوري نايم بطريقة ثانية 
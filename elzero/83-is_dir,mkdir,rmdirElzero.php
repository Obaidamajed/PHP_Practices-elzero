<?php

  /*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission مالك الدايركتوري اللي هو انا
    ------ Third Number Is => User Group Permission القروب اللي انا فيه في السستم
    ------ Fourth Number Is => Others Permissions باقي الناس
    - rmdir(Name[Required], Context[Optional])
  */

  var_dump(is_dir("Lessons")); // بشيك اذا الفولدر موجود او لا
  echo '<br>';
  var_dump(is_dir("82-obaida.txt")); // أعطاني فولس رغم ان التكست موجود, لأنو بشيك فقط عالفولدر
  echo '<br>';

  // mkdir("Test/Upload/Files", 0777, true); // بنشأ دايركتوري
  // true بدونها ما كان حينشأ الدايركتوري, لأنو انا بحاجة في الأول إني أروح ع ملف الزيرو ع جهازي و أنشأ بداخلو فولدر اسمو تيست وبداخل التيست فولدر ثاني اسمو أبلود وبعديها هيك حينشألي بداخل الأب لود فولدر اسمو فايلز
  echo '<br>';

  // rmdir("Test/Upload/Files"); // بحذف الفايلز
  // rmdir("Test/Upload"); // بحذف الأب لود
  // rmdir("Test"); // بحذف التيست  
   // بحذف الدايركتوري الفاضي, اذا حذف بعطيك ترو واذا ما حذف بعطيك فولس
  
   var_dump(file_exists("Test/Upload/Files")); // بشيك عالفايل او الدايركتوري


  // الفولد اللي بننشأو اسمو دايركتوري, اتعود على هذا الاسم
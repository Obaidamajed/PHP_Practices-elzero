<?php

  /*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
  */

  echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>"; // هيك برجعلي المساحة بالغيغا , بتجيب المساحة كاملة
  // / 1024 / 1024 / 1024 برجعلي المساحة بالبايت بدون ما أقسم على هدول 
  echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>"; // بتجيب المساحة الفاضية
  var_dump(file_exists("82-obaida.txt")); // بشوف الفايل اذا انو موجود أم لا
  echo '<br>';
  echo filesize("82-obaida.txt"); // بجيبلي مساحة الفايل


  
  
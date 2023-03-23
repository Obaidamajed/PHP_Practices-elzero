<?php

  /*
    Date And Time Functions

    - time()
    --- Unix Timestamp => Seconds Since 01 Jan 1970

    - getdate()

    - date_parse()

  */

  date_default_timezone_set("Asia/Amman");

  echo time() . "<br>"; // بجيب عدد الثواني اللي مرت من 1/1/1970

  echo time() / 60 . " Minutes<br>";
  echo time() / 60 / 60 . " Hours<br>";
  echo time() / 60 / 60 / 24 . " Days<br>";
  echo time() / 60 / 60 / 24 / 365 . " Years<br>";

  echo "<pre>";
  print_r(getdate()); // بترجعلي أرراي بمعلومات اليوم اللي انا فيه بناءاً على العاصمة اللي بحددها فوق أول إشي
  //getdate()=getdate(time())
  echo "</pre>";

  $t = getdate();

  echo $t["year"] . "<br>";

  echo "<pre>";
  print_r(date_parse("1985-2-31 5:25:15 UTC"));//31 .. بعطيني تحذير بسببها لأنو شهر 2 مافي 31 يوم
  echo "</pre>";
  // date_parse () بعمل تحليل للتاريخ اللي انت بتعطيه اذا فيه خطأ 
  // UTC تايم زون صحيح 



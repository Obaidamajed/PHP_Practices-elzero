<?php

  /*
    Constants
    - That Value Cannot Change During The Execution
    - Constants Always Uppercase
  */

  define("DB_NAME", "elzero");
  // define() بستخدم هذا الفنكشن عشان اعمل كونستانت جديد
  // DB_NAME اسم الكونستانت
  // elzero قيمة الكونستانت
  define("MAIN_NUMBER", 5);
  define("MAIN_NUMBER", 10);// ما بنفع تغير الكونستانت لأنو ما بتغير خلص من اسمو كونستانت

  echo DB_NAME . "<br>";
  echo MAIN_NUMBER * 50;
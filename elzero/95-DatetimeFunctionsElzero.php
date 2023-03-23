<?php

  /*
    Date And Time Functions

    - date_interval_create_from_date_string() فنكشن بتنشأ دايت إنتيرفال من الدايت سترنق اللي بعطيه إياه
    - date_add()
    - date_sub()
    - date_modify()

  */

  date_default_timezone_set("Asia/Amman");

  $d = date_create();
  
  // date_add($d, date_interval_create_from_date_string("1 year 2 months 5 days")); // ضفت على تاريخ عمان هذا التاريخ المكتوب في السترنق
  
  // date_sub($d, date_interval_create_from_date_string("1 year 2 months 5 days")); // هون حذفت
  
  date_modify($d, "+20 months"); // هون بتقدر تعدل مباشرة, أسهل وأسرع في التعديل
  echo date_format($d, "Y/m/d H-i-s a");

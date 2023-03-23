<?php

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL السانيتايز الخاص بالايميل 
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT السانيتايز الخاص بالإنتجر
    --------- Remove All But Digits, +, - بشيل كل اشي ما عدا الارقام واشارة الجمع والطرح

    ------ FILTER_SANITIZE_NUMBER_FLOAT السانيتايز الخاص بالفلوت نمبر
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL السانيتايز الخاص بال يو آر إل 
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
  */

  //  في الفلتر كنا نتحقق أن الايميل هذا صالح أم غير صالح 
  //  في السانيتايز بنبدا نتحكم في البيانات 

  $email = "o@n  ¥   n.sa";

  var_dump(filter_var($email, FILTER_SANITIZE_EMAIL)); // كأنك بتعقِم البيانات وبترجعها سليمة

  echo "<br>";

  $int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";

  var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));

  echo "<br>";

  $float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";

  var_dump(filter_var($float,FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
  ));
  // FILTER_FLAG_ALLOW_THOUSAND بطلع الفاصلة تبعة الألف
  // FILTER_FLAG_ALLOW_FRACTION بطلع الكسور
  echo "<br>";

  $url = "https://el         zer¥¥¥¥¥o.org";

  var_dump(filter_var($url, FILTER_SANITIZE_URL));

  echo "<br>";
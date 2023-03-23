<?php

  /*
    Function
    - Optional Return &#038; Null
    - End After Return
  */

  $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

  function get_number($num_one, $num_two) {
    return $num_one + $num_two;
    // بعد الريتورن ما بطبع اشي
    echo "Will Not Echo Anything";
  }

  // get_number(2, 1); // 3
  // echo $prizes[3]; // "Apple TV"
  // $prize_number = get_number(2, 1);
  // var_dump($prize_number); هون حيعطيني نول في حال ما كنت كاتب ريتورن في الفنكشن لأنو بدون الرتورن الفنكشن ما برجعلي اشي وبالتالي ما بقدر استخدم اي قيمة من الفنكشن
  // بدون الريتورن , الفنكشن بترجع نول
  // echo $prizes[];

  // $prize_number = get_number(2, 1);
  // var_dump($prize_number); .... int(3)

  echo $prizes[get_number(2, 1)];

<?php

  /*
    Sessions
    - Advanced Information
    - Edit
    - Views Count
  */

  // session_id("lkjsdklfjksdfsdf"); // بتحدد الكاي قبل ما تنشأ السيشن

  session_start();

  // echo session_id(); // بجيبلي ال آي دي للسيشن

  $_SESSION['name'] = "Elzero";

  // if (isset($_SESSION['views'])){ 
  //   $_SESSION['views']++;
  // }else{
  //   $_SESSION['views'] = 1;
  // }
  // طريقة إف العادية
  
  isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1; // لو كان موجود زودلي عليه واحد, واذا مو موجدود يعني اول زيارة الو اعملي قيمتو تساوي واحد
  // (Condition ? True : False) This is a ternary operator (short if)
  echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'];

  echo '<a href="103-about.php">About</a>';
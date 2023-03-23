<?php

  /*
    Pre-Defined Variables

    Search
    - PHP Pre-Defined Variables
  */

  // echo '<pre>';
  // print_r($_SERVER); // $_SERVER this is an Array 
  // echo $_SERVER["HTTP_CONNECTION"] . "<br>";
  // echo $_SERVER["HTTP_SEC_FETCH_MODE"];
  // echo '</pre>';

  echo $_GET["username"];
  // أول ما تعمل ريلود للصفحة رح يعطيك ايرور لأنو مافي بيانات دخلتها في الانبوت وبالتالي القيت فاضية لسا مافيها اشي, بس أضغط على السبمت البيانات بتنتقل بشكل أرراي للمتغير قيت
?>

<form action="" method="get">
  <input type="text" name="username">
  <!-- username (عبارة عن الكي للفاليو (قيمة الإنبوت  -->
  <input type="submit" value="Send">
</form>
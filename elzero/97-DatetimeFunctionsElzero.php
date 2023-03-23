<?php

  /*
    Date And Time Functions

    - date_diff() بجيب الفرق بين تاريخين , بترجعلي أوبجيكت
    - strtotime(DateTime, Base)

  */

  date_default_timezone_set("Asia/Amman");

  $reg = date_create("2022-01-09");
  $now = date_create("now");//"now" This is a default value

  $diff = date_diff($reg, $now);

  echo '<pre>';
  print_r($diff);
  echo '</pre>';

  echo "You Are A Member For " . $diff->days . " Days<br>";
  // $diff->days بجيب الدايز اللي باداخل الأوبجكت ديف

  echo date("Y-m-d H:i:s") . "<br>";
  echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";//strtotime() بحول السترنق ل تايم
  // هون بطلب منو يعطيني تاريخ يوم الجمعة القادم
  echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
  echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
  echo date("Y-m-d M D H:i:s", strtotime("tomorrow", strtotime("1982-10-25"))) . "<br>";
  // هون بلش يحسب من التاريخ اللي أعطيتو إياه, بدون ما اكتب اشي بحسب من اللحظة اللي انا فيها لغاية بداية اليوم الثاني
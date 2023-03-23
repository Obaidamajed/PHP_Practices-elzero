<?php

  /*
    Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()

  */

  // Get Timezone

  echo date_default_timezone_get() . "<br>"; // بجيب اسم البلد اللي بجيب وقتها

  // Print Date And Time

  echo date("Y-m-d H:i:s") . "<br>"; // بطبع التاريخ والوقت

  // Change Timezone

  date_default_timezone_set("Asia/Amman"); // غيرت البلد اللي بجيب وقتها, اذا كنت كاتب اسم البلد خطأ بعطيني إيرور

  // Print Date And Time Again

  echo date("Y-m-d H:i:s") . "<br>"; // طبعت التاريخ والوقت بعد ما غيرت اسم البلد 

  // Get Timezone Again

  echo date_default_timezone_get() . "<br>"; // جبت اسم البلد اللي بجيب وقتها بعد ما غيرتها

  echo "<hr>";
  
  // Create Date Object

  $d = date_create("", timezone_open("Indian/Antananarivo"));
  // date_create () لو طبعتها هيك بدون ما اكتب بداخلها اشي حيرجعلي تاريخ ووقت ااخر عاصمة اخترتها واللي هي عمان 

  // Echo Date With Format

  echo date_format($d, "Y-m-d H:i:s"); // عرفت التوقيت من الدايت اللي انا أنشأتو الخاص بالشخص اللي م بعرف التوقيت عندو كم

  // Check Date

  echo "<br>";
  var_dump(checkdate(10, 25, 1982)); // checkdate() بعمل تشييك على صلاحية التاريخ
  echo "<br>";
  var_dump(checkdate(31, 02, 1982));
  echo "<br>";
  var_dump(checkdate(31, 02, 3500));
  echo "<br>";
  var_dump(checkdate(-2, 02, 1982));

  
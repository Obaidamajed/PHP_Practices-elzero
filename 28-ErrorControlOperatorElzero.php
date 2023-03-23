<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */

  // Variable
  $a = 10;
  $b = @$a or die("Variable Not Found");
  // @$a or die("Variable Not Found") هاي معناها يا الكود الاول نفذو يا الكود الثاني اللي بعد الأور
  // الاولوية بتكون للكود الاول, في حال ما اتنفذ الكود الاول بروح بنفذ الكود الثاني
  // معنى هذا الكلام إنو كود الداي ما رح يشتغل الا اذا كان في مشكلة عندي بالكود الاول اللي هو ال آي

  // @ بتوقف ظهور الإيرور في حال ما كنت معطي قيمة للمتغير آي

  // die("Variable Not Found") الرسالة اللي بتخرج في حال ما كنت معطي قيمة للمتغير آي
  // طبعا بإمكاني أكتب أي رسالة او اي جملة بدي اياها تطلع 
  // كمان اي أمر بنكتب بعديها ما حيتنفذ 
  echo "Test $b";
  echo '<br>';


  // File
  $f = @file("28-Obaida.txt") or die("File Not Found");
  echo '<pre>';
  print_r($f);
  echo '</pre>';
  echo '<br>';

  // Include
  (@include("osama_elzero.php")) or die("Include File Not Found");
  // @ هاي لحالها ما بتطلعلي الإيرور 
  // or die("Include File Not Found") وهاي بتطلعلي الجملة اللي انا بدي اياها 
  // الكودين مع بعض ما بطلعولي ايرور وبطلعولي جملة انا بكتبها

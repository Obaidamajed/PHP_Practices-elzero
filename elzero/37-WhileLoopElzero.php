<?php

  /*
    Control Structure
    - Loop عملية تكرار الكود الخاص فيك اكتر من مرة حسب الحاجة

    While
  */

  // echo "1<br>";
  // echo "2<br>";
  // echo "3<br>";
  // echo "4<br>";
  // echo "5<br>";

  // echo "1<br>2<br>3<br>4<br>5<br>";

  $i = 1;

  // while(Condition id True){
  //   Do This
  // }
  while ($i <= 3) {

    echo "$i<br>";

    $i++;

  }

  $a = 1;

  // Another syntax
  while ($a <= 3) :

    echo "$a<br>";

    $a++;

  endwhile;
<?php

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    ------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Int On Success

    ------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success
  */

  $email = "o@nn.sa";

  var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));
  // FILTER_VALIDATE_EMAIL بعمل فاليدايت عالايميل
  echo "<br>";

  $int = "90"; // "90.00", 90.50 ===> بعطيني نول
  // 90.00 , 90 , "90" ===> بعطيني إنتجر

  var_dump(filter_var($int,FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  ));
  // "options" => ["min_range" => 50, "max_range" => 100] بهاي الطريقة انا خليتو يعمل فاليدايت للارقام اللي بين الرقمين اللي اعطيتو اياهم بس
  // option لو خربطت وكتبت هاي الكلمة ما حيطبق الخيار هذا , لازم أكتب الكلمة صح 
  echo "<br>";

  $float = "90.50";

  var_dump(filter_var( $float, FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  ));
<?php

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
  */

  $bool = "Elzero"; // True | 1 | "yes" | "on" هاي القيم اللي بتعطيني ترو
  // False, 0, No, Off, "" هاي القيم اللي بتعطيني فولس

  var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
  // FILTER_NULL_ON_FAILURE حتى يصير يعطيني نول في حال كانت القيمة ليست أحد قيم الترو او الفولس
  echo "<br>";

  $url = "https://elzero.org/?id=100";

  var_dump(filter_var($url, FILTER_VALIDATE_URL,
  ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
  // مدام كتب ال يو آر إل اللي دخلتها وعد عدد الكركترز معناتو خلص هو هيك عمل فاليدايت على ال يو آر إل والوضع تمام 
  // FILTER_NULL_ON_FAILURE اذا اليو آر إل غير صحيحة برجعلي نول 
  // FILTER_FLAG_PATH_REQUIRED بتحقق من وجود المسار اللي بيجي بنهاية اليو آر إل, بعد الدوت أورق /
  // FILTER_FLAG_QUERY_REQUIRED بتحقق من الكويري سترنق, ?id=100 بس تطبعها بصير عندك كويري سترنق
  echo "<br>";

  $ip = "192.168.2.1";

  var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));
  // FILTER_FLAG_IPV6 بشوف اذا انها فيرجن 6 او لا 
  echo "<br>";

  $mac = "00:00:5e:00d:53:af";

  var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
  // FILTER_VALIDATE_MAC بشوف الماك أدريس 
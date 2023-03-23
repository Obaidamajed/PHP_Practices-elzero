<?php

  /*
    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */

  setcookie("style", "dark", time() + 60 * 60 * 24 * 30);
  // time() بتجيب الوقت بالثانية من 1/1/1970  لغاية الوقت الحالي
  // time() + 60 * 60 * 24 * 30 هيك بكون مددت مدة التخزين في الكويك لمدة شهر 
  // 60 * 60 * 24 * 30 = بالثانية شهر 
  // الدقيقة فيها ستين ثانية والساعة فيها ستين دقيقة واليوم في 24 ساعة والشهر في 30 يوم 
  // setcookie("cookie name", "cookie value", time() + 60 * 60 * 24 * 30);
  // في نقطة مهمة واللي هي إنو البراوزر اللي بفتح عليه هو اللي بتخزن فيه اسم الكوكي وقيمتو فقط











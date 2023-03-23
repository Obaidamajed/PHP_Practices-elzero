<?php

  /*
    Cookies

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
        حكينا عنهم الفيديو الماضي  
    --- Path
    --- Domain عن طريقو بقدر أتيح للكوكيز تظهر بمواقع معينة او مكان معين
        لو كتبت في الدوماين ".org" الكوكي حتكون متاحة بكل مكان
    --- Secure للاتصال الآمن , الديفولت فاليو الها فولس, لو عملتها ترو ف وقتها لازم ادا بدي اعمل سيت لأي كوكي عندي يكون اتصالي آمن
    --- HTTP_Only  
    Domain, Secure, HTTP_Only ==> هاي الامور ما رح تستخدمها هسا في بداية حياتك البرمجية, بتستخدمها لقدام مع المشاريع الضخمة

    Important
    - DO NOT Store Sensitive Information لا تخزن معلومات حساسة في الكوكي
    - Not Everything Saved To Cookies مو كل اشي بنحفظ في الكوكي
  */

  setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
  //  المسار الديفولت بكون قادر يشوف جميع المسارات الفرعية يعني هون بقدر أشوف اللي بداخل فولدر التشايلد لأنو بداخل الفولدر الرئيسي اللي بشتغل عليه واللي هو الزيرو, أما في حال أنشأت ملف بالأتش تي دوكس ما حيقرأ اشي من الكوكي لأنو حيكون فاضي لأنو ما إلو آكسيس عليه
  // "/" معناها ان الكوكي متاحة بكل مكان , غيرت المسار انا هون, باتالي حيصير يقرأ اللي بداخل الملف اللي أنشأتو بالأتش تي دوكس
  setcookie("popup", "done", strtotime("+1 month"));
  // هاي الكوكي فقط بشوفها اللي بداخل فولدر الزيرو
  // strtotime("+1 month") بهاي الطريقة كمان مددت فترة التخزين بالكوكي لمدة شهر 

  echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";
  // $_COOKIE سوبر قلوبال فاريابل بتخزن فيه قيم الكوكيز ك أرراي

  echo $_COOKIE["style"];
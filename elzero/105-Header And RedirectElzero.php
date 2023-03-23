<?php

  /*
    Header
    - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
    - You Can Use To Control Cache Or Force File Download

    header(Header[Required], Replace[Optional] = True, Response_Code[Optional])
  */

  // header("HTTP/1.0 404 Not Found");
  // header("expires: Sat, 01 Jan 2022 01:00:00");
  // header("cache-control: no-cache, must-revalidate");

  // echo "<a href='105-test.php'>Test</a>"; // بس يوديني ع صفحة التيست وأعمل باك برجعني عالصفحة اللي انا كنت فيها او صفحتي الحالية يعني
  header("Refresh:5; url=105-test.php"); // بعد 5 ثواني بنقلني لصفحة التيست
  // header("Location: 105-test.php");
  // exit; // لازم تحطها بعد الهيدر لحتى ما يصير عندك مشاكل, في حال كان في كود بعديها ما يكتبو بالصفحة الجديدة
  


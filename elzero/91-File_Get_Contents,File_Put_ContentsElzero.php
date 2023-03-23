<?php

/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

*/

echo get_include_path() . "<br>";

// echo file_get_contents("obaidaM.txt", true, NULL, 4, 5); // ببحث في الانكلود باث وما كان يلاقي الملف, رحت أنشأت الملف وبعدين صار يقرأ محتوى الملف اللي أنشأتو من جديد
// 4 بقرأ من الاندكس رقم اربعة
// 4, 5 بقرأ خمسة إندكس من الاندكس رقم اربعة 

// echo file_get_contents("https://elzero.net");

// print_r(file("https://elzero.net"));

// echo file_put_contents("86-obaidaM.txt", "\r\nThis Is New Line"); // عمل أوفر رايت عالبيانات القديمة والملف اذا ما كان موجود بنشأو إلي

echo file_put_contents("86-obaidaM.txt", "\r\nThis Is New Line", FILE_APPEND); // بهاي الطريقة بخليه يضيف البيانات بدون ما يعمل أوفر رايت عالبيانات القديمة
// عدد البايتس اللي انكتبت هي 18 




<?php

  /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer
  */

  $handle = fopen("86-obaidaM.txt", "r");
  // [r] For Read => Pointer At The Beginning
  // [r+] For Read & Write => Pointer At The Beginning
  // [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
  // Truncate To 0 Length ما رح يكون في بيانات, يعني رح يحذف أي بيانات بداخلو بمجرد ما أعمل ريلود
  // Create If Not Exists بنشأ الملف اذا ما كان موجود 
  // [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
  // fopen() عن طريقها بقدر أفتح فايل وأتعامل معو 
  
  // echo fgets($handle,4);
  // fgets($handle) بجيب سطر من ملف الهاندل
  // 4 بقرأ عدد معين من البايتس
  
  // echo fread($handle, 1024);
  // نفس فكرة الإف قيتس لكن هاي بتقرأ كل الأسطر
  // 1024 اكتر رقم بايتس حيقرأها

  fclose($handle); // أي تعامل الك مع الفايل لازم تسكر الفايل بعد م تخلص
  
<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
*/

$handle = fopen("86-obaidaM.txt", "a");

// echo fread($handle, 1024);

fwrite($handle, "\r\nThis Is A New Line 1",5); // بس أعمل ريلود حيكتبلي السترنق هذا في ملف عبيدة
// \r\n بتعملي لاين جديد 
// 5 حيطبعلي خمسة بايتس من السترنق 
// fwrite($handle, "\r\nThis Is A New Line 2");

// fclose($handle);
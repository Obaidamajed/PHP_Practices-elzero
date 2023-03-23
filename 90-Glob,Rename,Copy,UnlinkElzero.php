<?php

/*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()
*/

echo "<pre>";
print_r(glob("Lessons/*.*"));
echo "</pre>";
// glob("Lessons/*.*") بجيب جميع الملفات اللي بداخل هذا الفولدر 
// glob("*.*") بجيب جميع الملفات بجميع الامتدادات

// Rename => Same Place
// rename("Lessons/82-obaida.txt", "Lessons/Testing.txt"); // بغير اسم الملف

// Rename => Other Place => "Cut" || "Move"
// rename("Lessons/Testing.txt", "Y/Testing_2.txt"); // غيرت اسم الملف ونقلتو ع فولدر ثاني

// Move To Other Place
// rename("Lessons/86-obaidaM.txt", "Y/86-obaidaM.txt"); // نقلت الملف بدون ما أغير اسمو

// Copy Without Rename
// copy("Lessons/4-Tags.php", "Y/4-Tags.php"); // نسخت الملف بدون ما اغير اسمو

// Copy With Rename
// copy("Y/Testing_2.txt", "Lessons/Testing_22.txt");

unlink("Lessons/Testing_22.txt"); // حذفت الملف من الفولدر ليسونز
<?php

  /*
    Control Structure
    - If, Elseif, Else <= Advanced Practice

    30% To 60%
  */

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // $_SERVER["REQUEST_METHOD"] هذا الكود يعني إني ضغطت على زر السبمت 
    // $_SERVER["REQUEST_METHOD"] === "POST" وهذا الكود يعني اذا الفورم الخاص بزر السبمت كان الو ميثود اسمها بوست نفذلي الامر 
    
    
    if ($_POST['lang'] == 'ar') {
      // echo $_POST['lang'];

      header("Location: 32-ar.php");
      // بهاي الطريقة بتم تحويلي لصفحة أخرى

      exit();
      // هاي بتنهيلي عمل الصفحة او بالاحرى بتخرج معناها
      // ما رح تشعر فيها هسا إلا اذا حذفت أمر النقل لصفحة أخرى 
      // بحالتنا هاي بإمكانا نحذفها لأنو ما إلها تأثير 


    }
     elseif ($_POST['lang'] == 'en') {

      header("Location: 32-en.php");

      exit();

    }

  }
  // echo $_POST["username"];
  // echo "<br>";
  // echo $_POST["lang"];
  // في حال طبعتهم بدون جملة ال إف رح يعطيني إيرور لأنو ما رح يكون في متغير البوست أي قيمة كوني لسا ما بكون دخلت اشي في الانبوت او السيليكت

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
  </head>
  <body>
    <form action="" method="POST">
    <!-- $_POST معلومات الفورم هذا حتتخزن بهذا المتغير بشكل أرراي , الاراي رح يكون عبارة عن تو اندكس, الكاي لكل منهم هو اليوزر نايم واللانق والفاليو الهم هي قيمة الانبوت اللي انا بدخلها ك يوزر-->
    <!-- action="" يعني ان الفورم هاي رح تبعت البيانات لنفس الصفحة  -->
    <!-- action="30-IfElzero.php" هون يعني حينقلني للصفحة المذكورة في حال نقري على زر السبميت  -->
    <input type="text" name="username">
      <select name="lang">
        <option value="ar">Arabic</option>
        <option value="en">English</option>
        <option value="es">Spanish</option>
      </select>
      <input type="submit" value="Go">
    </form>
  </body>
</html>

 <!-- <?php
echo "<pre>";
print_r($_SERVER);;
echo "</pre>";
?>  -->




<?php

  /*
    Cookies
    - Practice
  */

  if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
    header("Location: " . $_SERVER["REQUEST_URI"]); // استخدمتها هون عشان يعملي ريلود بمجرد ما أضغط عالسبمت لحتى ما أحتاج أعمل انا ريلود مشان تصير الخلفية مماثلة للون اللي بختارو
    exit(); // ما بنفذ أي أمر بعدو
  }

?>

<form action="" method="POST">
  <input type="color" name="bg-color">
  <input type="submit" value="Choose Color">
</form>



<?php

  /*
    Sessions
    - Unset And Destroy
    - Login And Logout Simulation
  */

  session_start();

  // $_SESSION['name'] = "Elzero";
  // session_unset(); // بحذف السيشن فاريابلز  اللي بكونو في الملف اللي بكون بداخل ملف التمب داخل الزام على جهازي , لكن في نقطة واللي هي انو السشن نفسو ما اتدمر يعني بتقدر تتعامل معو من جديد
  // session_destroy(); // حيحذف السشن نفسو

  
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST['user'] === "obaida") {
      $_SESSION['username'] = "Obaida Majed";
      $_SESSION['id'] = 1005;
      // في حال دخل اسم اليوزر عبيدة حيضيف السيشن فاريابل هاي حتى تكون متاحة معي وانا بتنقل بين الصفحات 
    }
  }

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

  if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
  } else {

?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Login">
</form>

<?php } ?>

<a href="104-logout.php">Logout</a>




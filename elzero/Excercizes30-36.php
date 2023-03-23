<?php
echo "<h2>1</h2>";
echo "<br>";
$a = 100;
$b = 200;
$c = 100;
if ($b > $a && $a == $c && ($a + $c) == $b){
  echo "Yes";
}
echo "<hr>";
echo "<h2>2</h2>";
// Test Case 1
$a = 100;
$b = 200;
$c = 300;
if ($a < $b && $a < $c){
  echo "A Is Not Larger Than B Or C";
}
echo "<br>";
// Test Case 2
$a = 200;
$b = 100;
$c = 300;
if ($a > $b){
  echo "A Is Larger Than B";
}
echo "<br>";
// Test Case 3
$a = 200;
$b = 200;
$c = 100;
if ($a > $c){
  echo "A Is Larger Than c";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <hr>
  <h2>3</h2>
  <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
  </form>
</body>
</html>

<?php
$admins = ["obaida", "majed", "salah"];


if ($_SERVER["REQUEST_METHOD"] === "POST"){
  if ($_POST["user"] == $admins[0]){
    echo "The Request Method Is Post And Username Is " . $_POST["user"];
    echo "<br>";
    echo "This Username ".$_POST["user"]." Is Admin";
  }
  elseif($_POST["user"] == $admins[1]){
    echo "The Request Method Is Post And Username Is " . $_POST["user"];
    echo "<br>";
    echo "This Username ".$_POST["user"]." Is Admin";
  }
  elseif($_POST["user"] == $admins[2]){
    echo "The Request Method Is Post And Username Is " . $_POST["user"];
    echo "<br>";
    echo "This Username ".$_POST["user"]." Is Admin";
  }

}
echo "<hr>";
echo "<h2>4</h2>";



























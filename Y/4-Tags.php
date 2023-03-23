<?php

echo 'we love PHP';
// echo is a built in function makes me print that i want print it 
echo "<br>";  


ECHO 'we love PHP';
ECHO "<br>"; 
// the letters is insensitive

print 'we love PHP';
print "<br>";
// print is another built in function 

PRINT 'we love PHP';
PRINT "<br>";  

?>
<!-- The best practice is delete end tag (?>) of php if there is no other lines after it  -->

<!-- Short tag: -->
<?=
'we love PHP with short tag <br>
--------------------------------- <br>';
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
  <?php echo '<br> HTML'; ?>
  <!-- i do not can delete end tag of php (?>) because there is other lines after it  -->
</body>
</html>
<?php echo "<br> <br> HTML";
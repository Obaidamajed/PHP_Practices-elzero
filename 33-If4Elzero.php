<?php

  /*
    Control Structure
    - If, Elseif, Else <= Alternate Syntax

    60% To 80%
  */
  // method 1
  if (10 > 5) {

    echo "Good";

  } else {

    echo "Bad";

  }

  echo "<br>";

  // method 2
  if (10 > 10) echo "Good";
  else echo "Bad";
  // طريقة مختصرة لكتابة جملة ال إف, بنقدر نستعملها في حال كان الكود عبارة عن سطر واحد فقط
  
  echo "<br>";

  if (10 > 10)
    echo "Good";
  else
    echo "Bad";

  echo "<br>";
  
  if (10 > 10) echo "Good"; else echo "Bad";
  
  echo "<br>";
?>




<?php if (10 > 5) : ?>
  <!-- : هاي النقطتين الرأسيتين بدل { -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    Hello Page
  </body>
</html>

<?php endif; ?>
<!-- endif هاي بدل هاي } -->
<!-- ليش كتبتهم بهالطريقة ؟ 
عشان أميز بداية ونهاية تسكيرة جملة ال إف 
لأنو لما يكون عندي كوود كبير وطويل حواجه صعوبة بتمييز البداية والنهاية لتسكيرة جملة ال إف -->
<!-- This is an alternate syntax  -->
<?php
  echo "<br>";
  if (10 > 10) :

    echo "First";

  elseif (10 > 10) :

    echo "Second";

  else:

    echo "Last";

  endif;

?>
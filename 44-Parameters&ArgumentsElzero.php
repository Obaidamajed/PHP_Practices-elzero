<?php

  /*
    Function
    - Advanced Examples With Parameters And Arguments
    - Real Life Example
  */

  function say_hello_to($one, $two) { // $one, $two are parameters or a variables
    echo "Hello $one $two<br>";
  }
  say_hello_to("Osama", "Ahmed"); // Osama, Ahmed are arguments or the value of variable

  function deep_freezer($item) {
    if ($item === "Water") {
      echo "Make Ice <br>";
    } elseif ($item === "Coca Cola") {
      echo "Make It Cold <br>";
    } elseif ($item === "Fruits") {
      echo "Make It Fresh <br>";
    } else {
      echo "Unknown Item";
    }
  }

  deep_freezer("Water");
  deep_freezer("Coca Cola");
  deep_freezer("Fruits");
  deep_freezer("Tv Remote");
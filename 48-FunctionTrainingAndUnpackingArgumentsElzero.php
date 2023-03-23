<?php

  /*
    Function
    - Function Advanced Training
    -- Unpacking In Arguments

    Search
    - PHP Variadic Functions
    - Splat Operator >>>> same the spread syntax
  */

  $group_of_skills = ["HTML", "CSS", "JS", "PHP"];

  function get_data($name, $country = "Private", ...$skills) { // السبريد بنتاكس لازم يكون بالأخير
    echo "Hello $name Your Country Is $country <br>";
    foreach ($skills as $skill) :
      echo "-- $skill <br>";
    endforeach;
  }

  // get_data("Osama", "Egypt", ...$group_of_skills);
  get_data("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);

  // . . .$group_of_skills = "HTML", "CSS", "JS", "PHP" ....... This is unpacking
  // . . .["HTML", "CSS", "JS", "PHP"] = "HTML", "CSS", "JS", "PHP" ....... This is unpacking
  // unpacking بتفرط الأرراي 
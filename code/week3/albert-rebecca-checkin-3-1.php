<?php

  echo "<ul>";

  $queryArray = $_GET;

  foreach ($queryArray as $key_name => $key_value) {
    echo "<li>" . $keyname . ": ";
    echo $key_value . "</li>";
  }

  echo "</ul>";

  print_r($queryArray);

  // Array practice (IGNORE)
  // echo "<h1>Array Test Page</h1>";
  //
  // $test_array = array(
  //   'party' => 'birthday',
  //   'year' => '2017',
  //   'place' => 'Go Kart Track',
  // );
  //
  // echo $test_array ['party'];
  //
  // print_r($test_array);
 ?>

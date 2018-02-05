<?php

  include '/../nav.php';

  echo "<h1>Whittier Neighborhood News</h1>";
  echo "<br>";

  if (isset($_GET['section'])) {
    $section = $_GET['section'];
  }

  // include 'include' . $section . '/section-template.php';

  // if ($section == 'sports') {
  //   include 'include/sports/section-template.php';
  // }
  //
  // if ($section == 'weather') {
  //   include 'include/weather/section-template.php';
  // }
  //
  // if ($section == 'news') {
  //   include 'include/news/section-template.php';
  // }

 ?>

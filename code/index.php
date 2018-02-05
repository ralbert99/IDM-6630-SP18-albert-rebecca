<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Whittier Neighborhood News</title>
    <link rel='stylesheet' href='css/style.css'>
  </head>

  <header>

    <?php
    include 'include/nav.php';
    ?>

  </header>

    <body>

    <?php

    $section = $_GET['section'];
    $article = $_GET['article'];

    if (isset($section)) { // check if section is set, otherwise include homepage

      if (file_exists("include/section/" . $section . "/section-template.php")) { // check if section is set, otherwise indicate that it cannot be found
        if (isset($article)) {

          if (file_exists("include/article/" . $article . "/article-template.php")) { // check if article can be found, otherwise indicate it cannot
            include 'include/article/' . $article . '/article-template.php';
          } else {
            echo "<h2>Error 404: Sorry, That Article Cannot Be Found</h2>";
          }

        } else {
          include 'include/section/' . $section . '/section-template.php';
        }

      } else {
        echo "<h2>Error 404: Sorry, That Section Cannot Be Found</h2>";
      }

    } else {
      include 'index.php';
    }

    ?>

  </body>
</html>

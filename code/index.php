<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Whittier Neighborhood News</title>
    <link rel='stylesheet' href='css/css.css'>
  </head>

  <header>

    <?php

    include 'include/nav.php';

    ?>

    <body>

    <?php

    if (isset($_GET['section'])) {
      $section = $_GET['section'];

      if (file_exists("include" . $section . "/section-template.php")) {
        if (isset($_GET['article'])) {
          $article = $_GET['article'];

          if (file_exists("include" . $article . "/article-template.php")) {
            include 'include/article' . $article . '/article-template.php';
          } else {
            echo "<h2>Error 404: Sorry, That Article Cannot Be Found</h2>";
          }

        } else {
          include 'include/section' . $section . '/section-template.php';
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

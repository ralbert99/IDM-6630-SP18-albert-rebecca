<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Array, Function, and Loop</title>
  </head>
  <body>
    <?php

      $city = "Denver";
      $elevation = "5280";
      $elevunits = "feet high";
      $distance = "913.5";
      $miles = "miles away";

      $homecity = array($city, $elevation, $elevunits, $distance, $miles);

      function colorado($distancefrom) {
        echo "<ul>";

          foreach ($distancefrom as $value) {
          echo "<li>$value</li>";
          }

        echo "</ul>";
      }

      colorado($homecity);
    ?>
  </body>
</html>

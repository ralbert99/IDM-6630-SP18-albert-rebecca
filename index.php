<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Going to the Movies</title>
  </head>
  <body>
    <?php

      echo "<h1>Emma in the Movies</h1>";
      echo "<h2>Reviewing a few of the more popular, as well as the most overlooked, films featuring Emma Stone as a lead or supporting actress.</h2>";

      $movie1 = array(
        'title' => 'Battle of the Sexes',
        'imdbURL' => 'http://www.imdb.com/title/tt4622512/?ref_=nm_flmg_act_5',
        'year' => 2017,
        'rottenTomatoesScore' => 86,
        'genre' => 'Biography & Drama',
        'posterURL' => '/img/.jpg'
      );

      $movie2 = array(
        'title' => 'La La Land',
        'imdbURL' => 'http://www.imdb.com/title/tt3783958/?ref_=nm_flmg_act_6',
        'year' => 2016,
        'rottenTomatoesScore' => 92,
        'genre' => 'Comedy & Romantic',
        'posterURL' => '/img/.jpg'
      );

      $movie3 = array(
        'title' => 'Birdman',
        'imdbURL' => 'http://www.imdb.com/title/tt2562232/?ref_=nm_flmg_act_14',
        'year' => 2014,
        'rottenTomatoesScore' => 91,
        'genre' => 'Comedy',
        'posterURL' => '/img/.jpg'
      );

      $movie4 = array(
        'title' => 'The Amazing Spider-Man',
        'imdbURL' => 'http://www.imdb.com/title/tt0948470/?ref_=nv_sr_2',
        'year' => 2014,
        'rottenTomatoesScore' => 73,
        'genre' => 'Action & Adventure',
        'posterURL' => '/img/.jpg'
      );

      $movie5 = array(
        'title' => 'The Help',
        'imdbURL' => 'http://www.imdb.com/title/tt1454029/?ref_=nm_flmg_act_24',
        'year' => 2011,
        'rottenTomatoesScore' => 75,
        'genre' => 'Drama',
        'posterURL' => '/img/.jpg'
      );

      $movie_list = array();

      array_push($movie_list, $movie1, $movie2, $movie3, $movie4, $movie5);

      function make_new_movie_list($movie_data) {
        echo $movie_data['title'];
        echo $movie_data['imdbURL'];
        echo $movie_data['year'];
        echo $movie_data['rottenTomatoesScore'];
        echo $movie_data['genre'];
        echo $movie_data['posterURL'];
      }

      make_new_movie_list($movie1);
      make_new_movie_list($movie2);
      make_new_movie_list($movie3);
      make_new_movie_list($movie4);
      make_new_movie_list($movie5);

    ?>
  </body>
</html>

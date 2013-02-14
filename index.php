<html>
<body>

<?php

require_once 'vendor/autoload.php';
require_once 'functions.php';

?>

<h1>Videoteca Siegfried</h1>

<?php

/**
 * @deprecated
 * @see
 */
function printMovieList($films) {
    echo '<ul>';
    for ($i = 1; $i <= PUBLISHED_MOVIES; $i++) {
        echo '<li class="movie"><a href="index.php?action=pick&id='.$films[$i]['id'].'">';
        echo $films[$i]['title'];
        echo '</a></li>';
    }
    echo '</ul>';
}

$repo = new \Avoja\Model\MovieRepository();

$movies = $repo->getMovies(5);

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'pick') {
        $movie = $movies[$_GET['id']];
        echo '<h2>Hai scelto una copia di "'.$movie['title'].'"</h2>';
        if ($movie['director'] == 'Jonny D') {
            $price = calcola_sconto($movie['price']);
        }
        elseif ($movie['director'] == 'Jonny B') {
            $price = calcola_sconto_Jonny_B($movie['price']);
        }
        else {
            $price = $movie['price'];
        }

        echo "<p>il film costa ".$price.'</p>';
        echo '<hr/>';

    }
} else {
    echo '<h2>La lista dei nostri film</h2>';
    echo '<p>Promozioni sui film di Jonny D e di Jonny B!!</p>';
}

$view = new \Avoja\View\Movie();
echo $view->getMovieListHtml($movies);


?>

</body>
</html>
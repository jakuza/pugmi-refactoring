<?php

namespace Avoja\View;

class Movie {

    public function getMovieListHtml($films) {
        $output = '<ul>';
        foreach ($films as $film) {
            $output .= '<li class="movie"><a href="index.php?action=pick&id='.$film['id'].'">';
            $output .= $film['title'];
            $output .= '</a></li>';
        }
        $output .= '</ul>';

        return $output;
    }

}

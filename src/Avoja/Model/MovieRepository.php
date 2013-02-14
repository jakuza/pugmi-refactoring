<?php

namespace Avoja\Model;

class MovieRepository {

    public function getMovies($limit) {

        $source = array(
            1 => array(
                'id' => 1,
                'title' => 'Movie A',
                'price' => 100,
                'director' => 'Jonny A'
            ),
            2 => array(
                'id' => 2,
                'title' => 'Movie B',
                'price' => 100,
                'director' => 'Jonny B'
            ),
            5 => array(
                'id' => 5,
                'title' => 'Movie E',
                'price' => 100,
                'director' => 'Jonny E'
            ),
            4 => array(
                'id' => 4,
                'title' => 'Movie D',
                'price' => 100,
                'director' => 'Jonny D'
            ),
            3 => array(
                'id' => 3,
                'title' => 'Movie C',
                'price' => 100,
                'director' => 'Jonny C'
            ),
            6 => array(
                'id' => 6,
                'title' => 'Movie F',
                'price' => 100,
                'director' => 'Jonny F'
            ),
        );

        ksort($source);
        return array_slice($source, 0, $limit, true);
    }
}

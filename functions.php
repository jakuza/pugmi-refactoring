<?php

define('PUBLISHED_MOVIES', 5);
define('DISCOUNT', 0.2);

function get_movies() {
    return array(
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
}

function calcola_sconto() {
    global $movie;

    return floor($movie['price'] * (1 - DISCOUNT));
}

function calcola_sconto_Jonny_B() {
    global $movie;

    return floor($movie['price'] * (1 - DISCOUNT * 2));
}

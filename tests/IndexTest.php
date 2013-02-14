<?php

namespace Avoja\Test;

class IndexTest extends AbstractFunctionalTest
{
    public function testIndex() {
        $crawler = $this->get('http://pugmi/index.php');

        $this->assertEquals('La lista dei nostri film', $crawler->filter('h2')->text());
        $this->assertEquals(5, $crawler->filter('.movie')->count());
        $this->assertEquals('Movie A', $crawler->filter('ul li.movie')->first()->text());
    }

    public function testPickMovieA() {
        $crawler = $this->get('http://pugmi/index.php?action=pick&id=1');

        $this->assertEquals('Hai scelto una copia di "Movie A"', $crawler->filter('h2')->text());
        $this->assertEquals('il film costa 100', $crawler->filter('p')->text());
    }

    public function testPickMovieB() {
        $crawler = $this->get('http://pugmi/index.php?action=pick&id=2');

        $this->assertEquals('Hai scelto una copia di "Movie B"', $crawler->filter('h2')->text());
        $this->assertEquals('il film costa 60', $crawler->filter('p')->text());
    }

    public function testPickMovieD() {
        $crawler = $this->get('http://pugmi/index.php?action=pick&id=4');

        $this->assertEquals('Hai scelto una copia di "Movie D"', $crawler->filter('h2')->text());
        $this->assertEquals('il film costa 80', $crawler->filter('p')->text());
    }

}

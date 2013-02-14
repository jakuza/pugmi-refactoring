<?php

class MovieTest extends \PHPUnit_Framework_TestCase {

    public function testPrintOneMovie() {
        $view = new \Avoja\View\Movie();
        $expectation = "<ul><li class=\"movie\"><a href=\"index.php?action=pick&id=666\">Ciccio Bello</a></li></ul>";
        $movies = array(array('title' => 'Ciccio Bello', 'id' => 666));

        $this->assertEquals($expectation, $view->getMovieListHtml($movies));
    }

}

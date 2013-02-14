<?php
/**
 * @author jromei
 */
class MovieRepositoryTest extends \PHPUnit_Framework_TestCase {

    public function testGetMovies() {

        $repo = new \Avoja\Model\MovieRepository();

        $results = $repo->getMovies(5);

        $this->assertEquals(5, count($results));
        $this->assertEquals(array(1, 2, 3, 4, 5), array_keys($results));
    }
}

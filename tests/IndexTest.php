<?php

namespace Avoja\Test;

class IndexTest extends AbstractFunctionalTest
{
    public function testLegacy() {
        $crawler = $this->get('http://pugmi/index.php');

        $this->assertRegExp('/oink/', $this->getResponseContent());
    }

}

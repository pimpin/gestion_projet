<?php

namespace recette\tests\units;

require_once __DIR__ . '/../../mageekguy.atoum.phar';

include '/classes/helloWorld.php';

use \mageekguy\atoum;
use \recette;

class helloWorld extends atoum\test
{
    public function testSay()
    {
        $helloWorld = new helloWorld();

        $this->string($helloWorld->say())->isEqualTo('Hello World!')
        ;
    }
}

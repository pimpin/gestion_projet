<?php

namespace recette\tests\units;

require_once __DIR__ . '/../mageekguy.atoum.phar';

include 'path/to/project/classes/helloWorld.php';

use \mageekguy\atoum;
use \vendor\project;

class helloWorld extends atoum\test
{
    public function testSay()
    {
        $helloWorld = new project\helloWorld();

        $this->string($helloWorld->say())->isEqualTo('Hello World!')
        ;
    }
}

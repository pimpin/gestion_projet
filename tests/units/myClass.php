<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/myClass.php';

use \mageekguy\atoum;
use \recette;

class MyClass extends atoum\test
{
    public function testGetName()
    {
        $instance = new MyClass();
    }
}

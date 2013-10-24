<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/maClasse.php';

use \mageekguy\atoum;
use \recette;

class MaClass extends atoum\test
{
    public function testGetName()
    {
        $instance = new MaClass();
    }
}

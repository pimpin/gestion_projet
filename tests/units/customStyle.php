<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/customStyle.php';

use \mageekguy\atoum;
use \recette;

class CustomStyle extends atoum\test
{
    public function testGetName()
    {
        $instance = new \CustomStyle();

    }
}

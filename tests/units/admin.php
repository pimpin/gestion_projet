<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/admin.php';

use \mageekguy\atoum;
use \recette;

class Admin extends atoum\test
{
    public function testGetname()
    {
        $admin = new \Admin();
        $adminName = $admin->getName();

      $this
        ->string($adminName)
       ;
    }
}

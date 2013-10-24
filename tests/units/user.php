<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/user.php';

use \mageekguy\atoum;
use \recette;

class User extends atoum\test
{
  public function testGetName()
  {
    $monUser = new \User();
    
    $this
      ->string($monUser->getName())
    ;
  }
    
}

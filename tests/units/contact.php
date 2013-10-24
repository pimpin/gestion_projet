<?php

namespace tests\units;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../../classes/contact.php';

use \mageekguy\atoum;
use \recette;

class Contact extends atoum\test
{
  public function testGetName()
  {
    $contact = new \Contact();
    $contactName = $contact->getName();

    $this
      ->string($contactName)
    ;
  }
}

<?php

use \mageekguy\atoum;

$runner->addTestsFromDirectory(__DIR__.'/tests/units');

$script->bootstrapFile(__DIR__.DIRECTORY_SEPARATOR.'.atoum.bootstrap.php');

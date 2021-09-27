<?php

require '../vendor/autoload.php';

use Mrstench\ComposerTest;

$unit = 12346541;

echo ComposerTest\byteFormat::getUnit($unit);

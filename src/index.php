<?php

namespace Mobymax\ProblemTest;

use Mobymax\ProblemTest\Modules\ProblemModule;

require __DIR__.'/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

$database = new Database();
$database->setup();

$module = new ProblemModule($database);

echo $module->init();

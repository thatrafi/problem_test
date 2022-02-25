<?php

namespace Mobymax\ProblemTest\Models;

use Mobymax\ProblemTest\Database;

abstract class Model
{
    protected $database = null;

    public function __construct(Database $connection)
    {
        $this->database = $connection;
    }
}

<?php

namespace Tests\Mobymax\ProblemTest;

use Mobymax\ProblemTest\Database;
use PHPUnit\Framework\TestCase as FrameworkTestCase;

abstract class TestCase extends FrameworkTestCase
{
    protected $database = null;

    public function setUp(): void
    {
        if (null === $this->database) {
            \Dotenv\Dotenv::createImmutable(__DIR__.'/..')->load();

            $this->database = new Database();
            $this->database->setup();
        }
    }
}

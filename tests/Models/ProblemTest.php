<?php

namespace Tests\Mobymax\ProblemTest\Models;

use Mobymax\ProblemTest\Exceptions\ProblemNotFoundException;
use Mobymax\ProblemTest\Models\Problem;
use Tests\Mobymax\ProblemTest\TestCase;

class ProblemTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->obj = new Problem($this->database);
    }

    public function test_ExpectIntegerId()
    {
        $problemId = 1;
        $problem = $this->obj->getProblem($problemId);

        $this->assertSame($problem['pkProblemID'], $problemId);
    }

    public function test_ExpectExceptionWhenNotFound()
    {
        $this->expectException(ProblemNotFoundException::class);

        $this->obj->getProblem(10);
    }
}

<?php

namespace Tests\Mobymax\ProblemTest\Models;

use Mobymax\ProblemTest\Models\ProblemDomain;
use Tests\Mobymax\ProblemTest\TestCase;

class ProblemDomainTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->obj = new ProblemDomain($this->database);
    }

    public function test_ExpectProblemDomainData()
    {
        $problemDomainList = $this->obj->getProblemDomains();
        $this->assertNotCount(0, $problemDomainList, "getProblemDomains should return all domains.");
    }
}

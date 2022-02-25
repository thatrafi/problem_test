<?php

namespace Tests\Mobymax\ProblemTest\Modules;

use Mobymax\ProblemTest\Modules\ProblemModule;
use Tests\Mobymax\ProblemTest\TestCase;

class ProblemModuleTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->obj = new ProblemModule($this->database);
    }

    public function test_InvalidElement()
    {
        $problemData = $this->obj->init();

        $problemData = json_decode($problemData);
        
        $this->assertNotCount(0, $problemData, 'Project module expects problem data.');
        $this->assertTrue(!in_array(false, $problemData), 'Array contains invalid elements.');
    }
}

<?php

namespace Mobymax\ProblemTest\Modules;

use Mobymax\ProblemTest\Database;
use Mobymax\ProblemTest\Models\Problem;
use Mobymax\ProblemTest\Models\ProblemDomain;

class ProblemModule
{
    private $database = null;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function init()
    {
        $problemDomain = new ProblemDomain($this->database);

        $problemDomainList = $problemDomain->getProblemDomains();
        $problemData = [];

        foreach ($problemDomainList as $domain) {
            $problem = new Problem($this->database);
            $problemData[] = $problem->getProblem($domain['fkProblemID']);
        }

        if (isset($_GET['export'])) {
            $this->export($_GET['export'], $problemData);
        }

        return $this->output($problemData);
    }

    public function output(array $data)
    {
        return json_encode($data);
    }

    public function export(string $filename, array $data)
    {
        $data = json_encode($data);
        shell_exec("echo '".$data."' > ".__DIR__.'/../../backups/'.$filename.'_'.time().'.json');
    }
}

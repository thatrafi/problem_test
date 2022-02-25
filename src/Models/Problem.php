<?php

namespace Mobymax\ProblemTest\Models;

use Mobymax\ProblemTest\Exceptions\ProblemNotFoundException;

class Problem extends Model
{
    public function getProblem(int $problemId)
    {
        $query = $this->database->query('SELECT * FROM Problem WHERE pkProblemID = '.$problemId)->fetch();
        if ($query == null) {
            throw new ProblemNotFoundException("");
        }else
        {
            return $query;
        }
         
    }
}

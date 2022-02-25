<?php

namespace Mobymax\ProblemTest\Models;

class ProblemDomain extends Model
{
    public function getProblemDomains()
    {
        return $this->database->query('
            SELECT * FROM
                ProblemDomain
            INNER JOIN
                ProblemDomainJoin
            ON 
                ProblemDomain.pkProblemDomainID = ProblemDomainJoin.pkProblemDomainJoinID'
        )->fetchAll();
    }
}

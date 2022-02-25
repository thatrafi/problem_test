<?php

namespace Mobymax\ProblemTest;

use PDO; // * Remove

class Database
{
    private $database = null;

    public function __construct()
    {
        print_r($_ENV['DB_NAME']);
        $this->database = new PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'].';charset=UTF8', $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        $this->database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function setup()
    {
        $sql = file_get_contents(__DIR__.'/../database.sql');
        $this->database->exec($sql);
    }

    public function query(string $query)
    {
        return $this->database->query($query);
    }
}

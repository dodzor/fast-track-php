<?php

namespace App\Services\Database;

trait DatabaseTrait {
    private $dbConnection;

    public function getDbConnection() {
        return $this->dbConnection;
    }
}

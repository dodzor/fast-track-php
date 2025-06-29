<?php

namespace App\Services\Cache;

trait CacheTrait {
    private $dbConnection;

    public function getDbConnection() {
        return $this->dbConnection;
    }
}

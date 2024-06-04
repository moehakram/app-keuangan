<?php

namespace App\Repository;

use App\Domain\RekeningMasuk;
use PDO;

class RekeningMasukRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save()
    {

    }

    public function update()
    {

    }

    public function findById()
    {
    
    }
}

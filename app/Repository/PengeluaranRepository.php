<?php

namespace App\Repository;

use App\Domain\Pengeluaran;
use PDO;

class PengeluaranRepository
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

<?php

namespace App\Repository;

use App\Domain\Kategori;
use PDO;

class KategoriRepository
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

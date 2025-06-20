<?php

namespace  App\Repository;

use App\Domain\Session;
use PDO;

class SessionRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Session $session): Session
    {
        $statement = $this->connection->prepare("INSERT INTO sessions(id, username) VALUES (?, ?)");
        $statement->execute([$session->id, $session->username]);
        return $session;
    }

    public function findById(string $id): ?Session
    {
        $statement = $this->connection->prepare("SELECT id, username from sessions WHERE id = ?");
        $statement->execute([$id]);

        try {
            if ($row = $statement->fetch()) {
                $session = new Session();
                $session->id = $row['id'];
                $session->username = $row['username'];
                return $session;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function deleteById(string $id): void
    {
        $statement = $this->connection->prepare("DELETE FROM sessions WHERE id = ?");
        $statement->execute([$id]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM sessions");
    }
}

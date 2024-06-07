<?php

namespace App\Repository;

use App\Domain\User;
use PDO;

class UserRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(User $user): User
    {
        $statement = $this->connection->prepare("INSERT INTO users (username, email, password, status, level, no_rek) VALUES (:username, :email, :password, :status, :level, :no_rek)");
        
        $statement->execute([
            ':username' => $user->username,
            ':email'    => $user->email,
            ':password' => $user->password,
            ':status'   => $user->status,
            ':level'    => $user->level,
            ':no_rek'   => $user->no_rek
        ]);

        // Optionally return the user with the inserted ID
        // $user->id_user = $this->connection->lastInsertId();
        
        return $user;
    }

    public function update(User $user): ?User
    {
        $statement = $this->connection->prepare("UPDATE users SET email = :email, password = :password WHERE username = :username");
    
        $statement->execute([
            ':email'    => $user->email,
            ':password' => $user->password,
            ':username' => $user->username
        ]);

        if ($statement->rowCount() === 0) {
            $user = null;
        }

        return $user;
    }

    public function findById(string $id): ?User
    {
        $statement = $this->connection->prepare("SELECT username, email, password, level FROM users WHERE username = ?");
        $statement->execute([$id]);

        try {
            if ($row = $statement->fetch()) {
                $user = new User();
                $user->username = $row['username'];
                $user->email = $row['email'];
                $user->password = $row['password'];
                $user->level = $row['level'];
                return $user;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }
    public function findByUsernameOrEmail(string $username, string $email): ?User
    {
        $statement = $this->connection->prepare("SELECT username, email, password, level FROM users WHERE username = :username OR email = :email");
        $statement->execute([
            ':username' => $username,
            ':email' => $email
        ]);

        try {
            if ($row = $statement->fetch()) {
                $user = new User();
                $user->username = $row['username'];
                $user->email = $row['email'];
                $user->password = $row['password'];
                $user->level = $row['level'];
                return $user;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }
}

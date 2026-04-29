<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['email', 'mdp'];

    protected $useTimestamps = false;

    public function findByEmail(string $email): ?array
    {
        $normalized = trim($email);
        $normalized = rtrim($normalized, ",;\t\n\r\0\x0B ");

        $candidates = array_values(array_unique([
            $normalized,
            $normalized . ',',
        ]));

        $builder = $this->builder();
        $builder->groupStart();
        foreach ($candidates as $candidate) {
            $builder->orWhere('email', $candidate);
        }
        $builder->groupEnd();

        $user = $builder->get()->getFirstRow('array');

        return $user ?: null;
    }

    public function authenticate(string $email, string $password): ?array
    {
        $user = $this->findByEmail($email);
        if (!$user) {
            return null;
        }

        $storedPassword = (string) ($user['mdp'] ?? '');

        // Authentification en clair uniquement (pas de hashing),
        // selon la consigne du projet.
        return hash_equals($storedPassword, $password) ? $user : null;
    }
}

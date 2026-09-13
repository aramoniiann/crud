<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository {

    public function all(): Collection {
        return User::all();
    }

    public function create(array $data): User {
        return User::create($data);
    }
    
    public function findByEmail(string $email): ?User {
        return User::where('email', $email)->first();
    }
    
    public function findOrFail(int $id): User {
        return User::findOrFail($id);
    }

    public function update(int $id, array $data): User {
        try {
            $user = $this->findOrFail($id);
            $user->update($data);
            return $user;
        } catch (ModelNotFoundException $e) {
        throw new EntityNotFoundException("Could not find entity with ID {$id}");
        }

    }
    
    public function delete(int $id): bool {
        $user = $this->findOrFail($id);
        return User::delete();
    }
}


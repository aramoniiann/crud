<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository {

    public function all() {
        return User::all();
    }

    //create
    public function create(array $data) {
        return User::create($data);
    }
    
    //read
    public function find($id) {
        return User::find($id);
    }

    //update
    public function update($id, array $data) {
        $user = User::find($id);
        $user->update($data);
        return $user;
    }
    

    //delete
    public function delete($id) {
        return User::destroy($id);
    }
}


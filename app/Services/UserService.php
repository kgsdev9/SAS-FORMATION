<?php

namespace App\Services ;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;


class UserService  {

    protected $userRepository  ;


    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUsser(array $data):User {
        return User::create([
            'name' => $data['name'],
            'email' =>$data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function all() {
        return  $this->userRepository->all();
       }

       public function countUser() {
        return $this->userRepository->countUser();
    }


}

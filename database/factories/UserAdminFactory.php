<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => 'Admin'
            'email' => 'admin@gmail.com',
            'role' => 1,
            'avatar' => 'avatars/avatar.png',
            'email_verified_at' => now(),
            'password' =>  bcrypt(123456)  // password
            'remember_token' => Str::random(10),
        ];
    }
}

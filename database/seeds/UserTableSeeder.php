<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $user = User::create([
            'name'      => 'Ismael cuevas',
            'email'     => 'ismael.c.26a@gmail.com',
            'password'  => '$2y$10$gOjft6HMaKU8wrkK2ApVkuKZDyQJtqBujvXy98PLg0oJwfqZ5HOx.',
        ]);
        
        $user->roles()->sync(1);
    }
}

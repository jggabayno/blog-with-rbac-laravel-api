<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();

        $users = [
            [
                'name' => 'Jonh Gall Gabayno',
                'access_id' => 1,
                "email" => 'admin@email.com',
                'password' => 'admin',
                'created_at' => $currentTime->toDateTimeString(),
                'updated_at' => $currentTime->toDateTimeString()
            ],
            [
                'name' => 'Burt Ceracas',
                'access_id' => 2,
                "email" => 'me.burt@gmail.com',
                'password' => 'user',
                'created_at' => $currentTime->toDateTimeString(),
                'updated_at' => $currentTime->toDateTimeString()
            ]
        ];


        foreach($users as $user) {
            User::create([
                'name' => $user['name'],
                'access_id' => $user['access_id'],
                'email' => $user['email'],
                'password' => $user['password'],
                'created_at' => $user['created_at'],
                'updated_at' => $user['updated_at']
            ]);
        }
    }
}

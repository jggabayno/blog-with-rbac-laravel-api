<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Access;
use Carbon\Carbon;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();

        $accesses = [
                    [
                        "name" => "admin",
                        "description" => "the admin access",
                        'created_at' => $currentTime->toDateTimeString(),
                    ],
                    [
                        "name" => "user",
                        "description" => "the user",
                        'created_at' => $currentTime->toDateTimeString(),
                    ]
                ];

            foreach($accesses as $access) {
                Access::create([
                    'name' => $access['name'],
                    'description' => $access['description'],
                    'created_at' => $access['created_at'],
                ]);
            }
    }
}

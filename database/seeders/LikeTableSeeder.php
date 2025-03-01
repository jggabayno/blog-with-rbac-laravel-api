<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Models\Like;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();

        Like::create([
            'user_id' => 2,
            'post_id' => 1,
            'created_at' => $currentTime->toDateTimeString(),
            'updated_at' => $currentTime->toDateTimeString(),
        ]);
    }
}

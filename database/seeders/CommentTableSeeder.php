<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();

        Comment::create([
            'user_id' => 2,
            'post_id' => 1,
            'body' => 'This is my first comment to first post',
            'created_at' => $currentTime->toDateTimeString(),
            'updated_at' => $currentTime->toDateTimeString(),
        ]);
    }
}

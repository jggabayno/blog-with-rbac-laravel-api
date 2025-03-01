<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\RoleAccess;

class RoleAccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleAccess::truncate();

        $userAccesses = [
            [
                "portal" => "home",
                "feature" => "posts",
                "access" => [
                    ["type" => "view", "label" => "View"],
                    ["type" => "create", "label" => "Create"],
                    ["type" => "edit", "label" => "Edit"],
                    ["type" => "update", "label" => "Update"],
                ]
            ],
            [
                "portal" => "home",
                "feature" => "likes",
                "access" => [
                    ["type" => "view", "label" => "View"],
                    ["type" => "create", "label" => "Create"],
                    ["type" => "edit", "label" => "Edit"],
                    ["type" => "update", "label" => "Update"],
                ]
            ],
            [
                "portal" => "home",
                "feature" => "comments",
                "access" => [
                    ["type" => "view", "label" => "View"],
                    ["type" => "create", "label" => "Create"],
                    ["type" => "edit", "label" => "Edit"],
                    ["type" => "update", "label" => "Update"],
                ]
            ],

        ];

        foreach ($userAccesses as $ua) {
            RoleAccess::create($ua);
        }
    }
}

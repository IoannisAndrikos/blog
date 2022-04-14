<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Personal',
            'slug' => 'personal',
            'created_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Work',
            'slug' => 'work',
            'created_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Hobbies',
            'slug' => 'hobbies',
            'created_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->subDays(100)->subMinutes(1, 3600)->format('Y-m-d h:i:s'),
        ]);

    }
}

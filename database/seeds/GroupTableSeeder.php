<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->delete();
        $groups = [
        	['id' => 1, 'name' => 'Apartment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        	['id' => 2, 'name' => 'Bunglow', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        	['id' => 3, 'name' => 'Land', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        	['id' => 4, 'name' => 'Hotel and Resort', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ];

        DB::table('groups')->insert($groups);
    }
}

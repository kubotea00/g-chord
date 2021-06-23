<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('artists')->insert([
            'name' => '秦基博',
        ]);
        DB::table('artists')->insert([
            'name' => Str::random(10),
        ]);
    }
}

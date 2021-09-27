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
            'name' => '窪田朝陽',
        ]);
         DB::table('artists')->insert([
            'name' => '秦基博',
        ]);
        DB::table('artists')->insert([
            'name' => 'ゆず',
        ]);
        DB::table('artists')->insert([
            'name' => 'YUI',
        ]);
        DB::table('artists')->insert([
            'name' => 'いきものがかり',
        ]);
        
    }
}

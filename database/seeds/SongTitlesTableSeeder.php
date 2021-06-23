<?php

use Illuminate\Database\Seeder;

class SongTitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('song_titles')->insert([
            'artist_id' => '1',
            'name' => '鱗',
        ]);
        DB::table('song_titles')->insert([
            'artist_id' => '2',
            'name' => Str::random(10),
        ]);
        DB::table('song_titles')->insert([
            'artist_id' => '3',
            'name' => Str::random(10),
        ]);
        DB::table('song_titles')->insert([
            'artist_id' => '4',
            'name' => Str::random(10),
        ]);
    }
}

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
            'name' => 'タイトル未定（1コーラス)',
        ]);
        DB::table('song_titles')->insert([
            'artist_id' => '2',
            'name' => '鱗',
        ]);
    }
}

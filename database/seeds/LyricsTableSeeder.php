<?php

use Illuminate\Database\Seeder;

class LyricsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('lyrics')->insert([
            'song_title_id' => '1',
            'name' => 'タイトル未定(1コーラス)',
            'image' => 'storage/song/タイトル未定.png',
        ]);
    }
}

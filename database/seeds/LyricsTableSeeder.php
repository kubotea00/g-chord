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
            'name' => '鱗',
            'body' => 'storage/song/鱗.png',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class MyScoreLyricsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_score_lyrics')->insert([
            'my_score_title_id' => '1',
            'name' => '極貧生活',
            'image' => 'https://g-chord.s3.ap-northeast-1.amazonaws.com/%E3%82%BF%E3%82%A4%E3%83%88%E3%83%AB%E6%9C%AA%E5%AE%9A.png',
        ]);
    }
}

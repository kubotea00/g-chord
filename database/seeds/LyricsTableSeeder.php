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
            'url' => 'https://g-chord.s3.ap-northeast-1.amazonaws.com/%E3%82%BF%E3%82%A4%E3%83%88%E3%83%AB%E6%9C%AA%E5%AE%9A.png',
        ]);
         DB::table('lyrics')->insert([
            'song_title_id' => '2',
            'name' => '鱗',
            'url' => 'https://g-chord.s3.ap-northeast-1.amazonaws.com/%E3%82%BF%E3%82%A4%E3%83%88%E3%83%AB%E6%9C%AA%E5%AE%9A.png',
        ]);
         DB::table('lyrics')->insert([
            'song_title_id' => '3',
            'name' => '栄光の架け橋',
            'url' => 'https://g-chord.s3.ap-northeast-1.amazonaws.com/%E3%82%BF%E3%82%A4%E3%83%88%E3%83%AB%E6%9C%AA%E5%AE%9A.png',
        ]);
         DB::table('lyrics')->insert([
            'song_title_id' => '4',
            'name' => 'CHE.R.RY',
            'url' => 'https://g-chord.s3.ap-northeast-1.amazonaws.com/%E3%82%BF%E3%82%A4%E3%83%88%E3%83%AB%E6%9C%AA%E5%AE%9A.png',
        ]);
        DB::table('lyrics')->insert([
            'song_title_id' => '5',
            'name' => 'ありがとう',
            'url' => 'https://g-chord.s3.ap-northeast-1.amazonaws.com/%E3%82%BF%E3%82%A4%E3%83%88%E3%83%AB%E6%9C%AA%E5%AE%9A.png',
        ]);
    }
}

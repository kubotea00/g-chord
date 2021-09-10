<?php

use Illuminate\Database\Seeder;

class MyScoreTitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_score_titles')->insert([
            'user_id' => '1',
            'name' => '極貧生活',
        ]);
    }
}

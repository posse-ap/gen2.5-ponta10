<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $params = [
            [
                'name' => 'カントウ地方',
                'en' => 'kanto'
            ],
            [
                'name' => 'ジョウト地方',
                'en' => 'joto'
            ],
            [
                'name' => 'ホウエン地方',
                'en' => 'hoen'
            ],            
            [
                'name' => 'シンオウ地方',
                'en' => 'sino'
            ],
            [
                'name' => 'イッシュ地方',
                'en' => 'issyu'
            ],
            [
                'name' => 'カロス地方',
                'en' => 'karosu'
            ],
            [
                'name' => 'アローラ地方',
                'en' => 'arora'
            ],
            [
                'name' => 'ガラル地方',
                'en' => 'gararu'
            ],
        ];
        foreach ($params as $param) {
            DB::table('countries')->insert($param);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class StudyTableSeeder extends Seeder
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
                'hour' => 3,
                'content' => 'ドットインストール',
                'language' => 'CSS',
                'date' => '2022-07-02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'hour' => 2,
                'content' => 'N予備校',
                'language' => 'PHP',
                'date' => '2022-07-08',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'hour' => 1,
                'content' => 'ドットインストール',
                'language' => 'Laravel',
                'date' => '2022-07-12',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],            
            [
                'hour' => 4,
                'content' => 'POSSE課題',
                'language' => 'SQL',
                'date' => '2022-07-15',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('studies')->insert($param);
        }
    }
}

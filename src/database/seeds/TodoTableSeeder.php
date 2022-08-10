<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
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
                'user_id' => 1,
                'text' => 'WebApp強化',
                'status' => 1,
                'deadline' => '2022-08-11',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'text' => 'Reactインプット',
                'status' => 1,
                'deadline' => '2022-08-10',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'text' => '3期生とサイト作り',
                'status' => 1,
                'deadline' => '2022-08-13',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],            
            [
                'user_id' => 1,
                'text' => 'Laravelのバリデーション勉強',
                'status' => 1,
                'deadline' => '2022-08-12',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('todos')->insert($param);
        }
    }
}

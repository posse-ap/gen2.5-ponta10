<?php

use Illuminate\Database\Seeder;

class HandsTableSeeder extends Seeder
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
                'id' => 1,
                'user_id' => 1,
                'pokemon_id' => 909,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'pokemon_id' => 150,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'pokemon_id' => 491,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'pokemon_id' => 643,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'pokemon_id' => 645,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 6,
                'user_id' => 1,
                'pokemon_id' => 646,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('hands')->insert($param);
        }
    }
}

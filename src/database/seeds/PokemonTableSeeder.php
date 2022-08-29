<?php

use Illuminate\Database\Seeder;

class PokemonTableSeeder extends Seeder
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
                'country_id' => 1,
                'id' => 1,
                'status' => 1,
                'name' => 'フシギダネ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 1,
                'id' => 2,
                'name' => 'フシギソウ',
                'status' => 2,
                'type' => 'くさ'
            ],
            [
                'country_id' => 1,
                'id' => 3,
                'status' => 3,
                'name' => 'フシギバナ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 1,
                'id' => 4,
                'status' => 1,
                'name' => 'ヒトカゲ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 1,
                'id' => 5,
                'status' => 2,
                'name' => 'リザード',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 1,
                'id' => 6,
                'status' => 3,
                'name' => 'リザードン',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 1,
                'id' => 7,
                'status' => 1,
                'name' => 'ゼニガメ',
                'type' => 'みず'
            ],
            [
                'country_id' => 1,
                'id' => 8,
                'status' => 2,
                'name' => 'カメール',
                'type' => 'みず'
            ],
            [
                'country_id' => 1,
                'id' => 9,
                'status' => 3,
                'name' => 'カメックス',
                'type' => 'みず'
            ],
            [
                'country_id' => 2,
                'id' => 152,
                'status' => 1,
                'name' => 'チコリータ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 2,
                'id' => 153,
                'status' => 2,
                'name' => 'ベイリーフ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 2,
                'id' => 154,
                'status' => 3,
                'name' => 'メガニウム',
                'type' => 'くさ'
            ],
            [
                'country_id' => 2,
                'id' => 155,
                'status' => 1,
                'name' => 'ヒノアラシ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 2,
                'id' => 156,
                'status' => 2,
                'name' => 'マグマラシ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 2,
                'id' => 157,
                'status' => 3,
                'name' => 'バクフーン',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 2,
                'id' => 158,
                'status' => 1,
                'name' => 'ワニノコ',
                'type' => 'みず'
            ],
            [
                'country_id' => 2,
                'id' => 159,
                'status' => 2,
                'name' => 'アリゲイツ',
                'type' => 'みず'
            ],
            [
                'country_id' => 2,
                'id' => 160,
                'status' => 3,
                'name' => 'オーダイル',
                'type' => 'みず'
            ],
            [
                'country_id' => 3,
                'id' => 252,
                'status' => 1,
                'name' => 'キモリ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 3,
                'id' => 253,
                'status' => 2,
                'name' => 'ジュプトル',
                'type' => 'くさ'
            ],
            [
                'country_id' => 3,
                'id' => 254,
                'status' => 3,
                'name' => 'ジュカイン',
                'type' => 'くさ'
            ],
            [
                'country_id' => 3,
                'id' => 255,
                'status' => 1,
                'name' => 'アチャモ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 3,
                'id' => 256,
                'status' => 2,
                'name' => 'ワカシャモ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 3,
                'id' => 257,
                'status' => 3,
                'name' => 'バシャーモ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 3,
                'id' => 258,
                'status' => 1,
                'name' => 'ミズゴロウ',
                'type' => 'みず'
            ],
            [
                'country_id' => 3,
                'id' => 259,
                'status' => 2,
                'name' => 'ヌマクロー',
                'type' => 'みず'
            ],
            [
                'country_id' => 3,
                'id' => 260,
                'status' => 3,
                'name' => 'ラグラージ',
                'type' => 'みず'
            ],
            [
                'country_id' => 4,
                'id' => 387,
                'status' => 1,
                'name' => 'ナエトル',
                'type' => 'くさ'
            ],
            [
                'country_id' => 4,
                'id' => 388,
                'status' => 2,
                'name' => 'ハヤシガメ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 4,
                'id' => 389,
                'status' => 3,
                'name' => 'ドダイトス',
                'type' => 'くさ'
            ],
            [
                'country_id' => 4,
                'id' => 390,
                'status' => 1,
                'name' => 'ヒコザル',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 4,
                'id' => 391,
                'status' => 2,
                'name' => 'モウカザル',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 4,
                'id' => 392,
                'status' => 3,
                'name' => 'ゴウカザル',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 4,
                'id' => 393,
                'status' => 1,
                'name' => 'ポッチャマ',
                'type' => 'みず'
            ],
            [
                'country_id' => 4,
                'id' => 394,
                'status' => 2,
                'name' => 'ポッタイシ',
                'type' => 'みず'
            ],
            [
                'country_id' => 4,
                'id' => 395,
                'status' => 3,
                'name' => 'エンペルト',
                'type' => 'みず'
            ],
            [
                'country_id' => 5,
                'id' => 495,
                'status' => 1,
                'name' => 'ツタージャ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 5,
                'id' => 496,
                'status' => 2,
                'name' => 'ジャノビー',
                'type' => 'くさ'
            ],
            [
                'country_id' => 5,
                'id' => 497,
                'status' => 3,
                'name' => 'ジャローダ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 5,
                'id' => 498,
                'status' => 1,
                'name' => 'ポカブ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 5,
                'id' => 499,
                'status' => 2,
                'name' => 'チャオブー',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 5,
                'id' => 500,
                'status' => 3,
                'name' => 'エンブオー',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 5,
                'id' => 501,
                'status' => 1,
                'name' => 'ミジュマル',
                'type' => 'みず'
            ],
            [
                'country_id' => 5,
                'id' => 502,
                'status' => 2,
                'name' => 'フタチマル',
                'type' => 'みず'
            ],
            [
                'country_id' => 5,
                'id' => 503,
                'status' => 3,
                'name' => 'ダイケンキ',
                'type' => 'みず'
            ],
            [
                'country_id' => 6,
                'id' => 650,
                'status' => 1,
                'name' => 'ハリマロン',
                'type' => 'くさ'
            ],
            [
                'country_id' => 6,
                'id' => 651,
                'status' => 2,
                'name' => 'ハリボーグ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 6,
                'id' => 652,
                'status' => 3,
                'name' => 'ブリガロン',
                'type' => 'くさ'
            ],
            [
                'country_id' => 6,
                'id' => 653,
                'status' => 1,
                'name' => 'フォッコ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 6,
                'id' => 654,
                'status' => 2,
                'name' => 'テールナー',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 6,
                'id' => 655,
                'status' => 3,
                'name' => 'マフォクシー',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 6,
                'id' => 656,
                'status' => 1,
                'name' => 'ケロマツ',
                'type' => 'みず'
            ],
            [
                'country_id' => 6,
                'id' => 657,
                'status' => 2,
                'name' => 'ゲコガシラ',
                'type' => 'みず'
            ],
            [
                'country_id' => 6,
                'id' => 658,
                'status' => 3,
                'name' => 'ゲッコウガ',
                'type' => 'みず'
            ],
            [
                'country_id' => 7,
                'id' => 722,
                'status' => 1,
                'name' => 'モクロー',
                'type' => 'くさ'
            ],
            [
                'country_id' => 7,
                'id' => 723,
                'status' => 2,
                'name' => 'フクスロー',
                'type' => 'くさ'
            ],
            [
                'country_id' => 7,
                'id' => 724,
                'status' => 3,
                'name' => 'ジュナイパー',
                'type' => 'くさ'
            ],
            [
                'country_id' => 7,
                'id' => 725,
                'status' => 1,
                'name' => 'ニャビー',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 7,
                'id' => 726,
                'status' => 2,
                'name' => 'ニャヒート',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 7,
                'id' => 727,
                'status' => 3,
                'name' => 'ガオガエン',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 7,
                'id' => 728,
                'status' => 1,
                'name' => 'アシマリ',
                'type' => 'みず'
            ],
            [
                'country_id' => 7,
                'id' => 729,
                'status' => 2,
                'name' => 'オシャマリ',
                'type' => 'みず'
            ],
            [
                'country_id' => 7,
                'id' => 730,
                'status' => 3,
                'name' => 'アシレーヌ',
                'type' => 'みず'
            ],
            [
                'country_id' => 8,
                'id' => 810,
                'status' => 1,
                'name' => 'サルノリ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 8,
                'id' => 811,
                'status' => 2,
                'name' => 'バチンキー',
                'type' => 'くさ'
            ],
            [
                'country_id' => 8,
                'id' => 812,
                'status' => 3,
                'name' => 'ゴリランダー',
                'type' => 'くさ'
            ],
            [
                'country_id' => 8,
                'id' => 813,
                'status' => 1,
                'name' => 'ヒバ二ー',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 8,
                'id' => 814,
                'status' => 2,
                'name' => 'ラビフット',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 8,
                'id' => 815,
                'status' => 3,
                'name' => 'エースバーン',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 8,
                'id' => 816,
                'status' => 1,
                'name' => 'メッソン',
                'type' => 'みず'
            ],
            [
                'country_id' => 8,
                'id' => 817,
                'status' => 2,
                'name' => 'ジメレオン',
                'type' => 'みず'
            ],
            [
                'country_id' => 8,
                'id' => 818,
                'status' => 3,
                'name' => 'インテレオン',
                'type' => 'みず'
            ],
        ];
        foreach ($params as $param) {
            DB::table('pokemons')->insert($param);
        }
    }
}

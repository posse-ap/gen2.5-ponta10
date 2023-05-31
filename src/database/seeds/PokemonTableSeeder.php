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
                'country_id' => 1,
                'id' => 144,
                'status' => 3,
                'name' => 'フリーザー',
                'type' => 'こおり'
            ],
            [
                'country_id' => 1,
                'id' => 145,
                'status' => 3,
                'name' => 'サンダー',
                'type' => 'でんき'
            ],
            [
                'country_id' => 1,
                'id' => 146,
                'status' => 3,
                'name' => 'ファイヤー',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 1,
                'id' => 150,
                'status' => 3,
                'name' => 'ミュウツー',
                'type' => 'エスパー'
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
                'country_id' => 2,
                'id' => 249,
                'status' => 3,
                'name' => 'ルギア',
                'type' => 'エスパー'
            ],
            [
                'country_id' => 2,
                'id' => 250,
                'status' => 3,
                'name' => 'ホウオウ',
                'type' => 'ほのお'
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
                'country_id' => 3,
                'id' => 380,
                'status' => 3,
                'name' => 'ラティアス',
                'type' => 'エスパー'
            ],
            [
                'country_id' => 3,
                'id' => 381,
                'status' => 3,
                'name' => 'ラティオス',
                'type' => 'エスパー'
            ],
            [
                'country_id' => 3,
                'id' => 382,
                'status' => 3,
                'name' => 'カイオーガ',
                'type' => 'みず'
            ],
            [
                'country_id' => 3,
                'id' => 383,
                'status' => 3,
                'name' => 'グラードン',
                'type' => 'じめん'
            ],
            [
                'country_id' => 3,
                'id' => 384,
                'status' => 3,
                'name' => 'レックウザ',
                'type' => 'ドラゴン'
            ],
            [
                'country_id' => 3,
                'id' => 386,
                'status' => 3,
                'name' => 'デオキシス',
                'type' => 'エスパー'
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
                'country_id' => 4,
                'id' => 483,
                'status' => 3,
                'name' => 'ディアルガ',
                'type' => 'はがね'
            ],
            [
                'country_id' => 4,
                'id' => 484,
                'status' => 3,
                'name' => 'パルキア',
                'type' => 'みず'
            ],
            [
                'country_id' => 4,
                'id' => 485,
                'status' => 3,
                'name' => 'ヒードラン',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 4,
                'id' => 486,
                'status' => 3,
                'name' => 'レジギガス',
                'type' => 'ノーマル'
            ],
            [
                'country_id' => 4,
                'id' => 487,
                'status' => 3,
                'name' => 'ギラティナ',
                'type' => 'ゴースト'
            ],
            [
                'country_id' => 4,
                'id' => 488,
                'status' => 3,
                'name' => 'クレセリア',
                'type' => 'エスパー'
            ],
            [
                'country_id' => 4,
                'id' => 491,
                'status' => 3,
                'name' => 'ダークライ',
                'type' => 'あく'
            ],
            [
                'country_id' => 4,
                'id' => 493,
                'status' => 3,
                'name' => 'アルセウス',
                'type' => 'ノーマル'
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
                'country_id' => 5,
                'id' => 641,
                'status' => 3,
                'name' => 'トルネロス',
                'type' => 'ひこう'
            ],
            [
                'country_id' => 5,
                'id' => 642,
                'status' => 3,
                'name' => 'ボルトロス',
                'type' => 'でんき'
            ],
            [
                'country_id' => 5,
                'id' => 643,
                'status' => 3,
                'name' => 'レシラム',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 5,
                'id' => 644,
                'status' => 3,
                'name' => 'ゼクロム',
                'type' => 'でんき'
            ],
            [
                'country_id' => 5,
                'id' => 645,
                'status' => 3,
                'name' => 'ランドロス',
                'type' => 'みず'
            ],
            [
                'country_id' => 5,
                'id' => 646,
                'status' => 3,
                'name' => 'キュレム',
                'type' => 'こおり'
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
                'country_id' => 6,
                'id' => 716,
                'status' => 3,
                'name' => 'ゼルネアス',
                'type' => 'フェアリー'
            ],
            [
                'country_id' => 6,
                'id' => 717,
                'status' => 3,
                'name' => 'イベルタル',
                'type' => 'あく'
            ],
            [
                'country_id' => 6,
                'id' => 718,
                'status' => 3,
                'name' => 'ジガルデ',
                'type' => 'じめん'
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
                'country_id' => 7,
                'id' => 791,
                'status' => 3,
                'name' => 'ソルガレオ',
                'type' => 'エスパー'
            ],
            [
                'country_id' => 7,
                'id' => 792,
                'status' => 3,
                'name' => 'ルナアーラ',
                'type' => 'エスパー'
            ],
            [
                'country_id' => 7,
                'id' => 800,
                'status' => 3,
                'name' => 'ネクロズマ',
                'type' => 'エスパー'
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
            [
                'country_id' => 8,
                'id' => 888,
                'status' => 3,
                'name' => 'ザシアン',
                'type' => 'はがね'
            ],
            [
                'country_id' => 8,
                'id' => 889,
                'status' => 3,
                'name' => 'ザマゼンタ',
                'type' => 'かくとう'
            ],
            [
                'country_id' => 9,
                'id' => 906,
                'status' => 1,
                'name' => 'ニャオハ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 9,
                'id' => 907,
                'status' => 2,
                'name' => 'ニャローテ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 9,
                'id' => 908,
                'status' => 3,
                'name' => 'マスカーニャ',
                'type' => 'くさ'
            ],
            [
                'country_id' => 9,
                'id' => 909,
                'status' => 1,
                'name' => 'ホゲータ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 9,
                'id' => 910,
                'status' => 2,
                'name' => 'アチゲータ',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 9,
                'id' => 911,
                'status' => 3,
                'name' => 'ラウドボーン',
                'type' => 'ほのお'
            ],
            [
                'country_id' => 9,
                'id' => 912,
                'status' => 1,
                'name' => 'クワッス',
                'type' => 'みず'
            ],
            [
                'country_id' => 9,
                'id' => 913,
                'status' => 2,
                'name' => 'ウェルカモ',
                'type' => 'みず'
            ],
            [
                'country_id' => 9,
                'id' => 914,
                'status' => 3,
                'name' => 'ウェーニバル',
                'type' => 'みず'
            ],
            [
                'country_id' => 9,
                'id' => 1007,
                'status' => 3,
                'name' => 'コライドン',
                'type' => 'かくとう'
            ],
            [
                'country_id' => 9,
                'id' => 1008,
                'status' => 3,
                'name' => 'ミライドン',
                'type' => 'でんき'
            ],
        ];
        foreach ($params as $param) {
            DB::table('pokemons')->insert($param);
        }
    }
}

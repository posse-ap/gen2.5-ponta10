<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
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
                'name' => 'HTML',
                'text' => 'この章では、「HTMLとは何か？」について専門用語を使わずに画像と共に解説していきます。
                HTMLとは「ハイパーテキスト・マークアップ・ランゲージ（Hyper Text Markup Language）」のことで、WEBページを作成するための言語です。',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'name' => 'CSS',
                'text' => 'CSSとはWebページの文字の色や大きさ、背景、配置といったスタイル（見た目）を設定する言語です。一般的にWebサイトはHTMLという言語で記述されており、これにスタイルシートを記述する言語であるCSSを適用することで、私達が普段見ているWebサイトが構成されています。',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'name' => 'JavaScript',
                'text' => 'JavaScriptとはブラウザを「動かす」ためのプログラム言語のこと。例えば、Webサイトを訪問したとき、ポップアップ画面やカルーセルのように、Webサイト上でアニメーションが動いているのを見たことがあるのではないでしょうか？あのようなブラウザが「動く」ために、指示を出しているプログラミング言語がJavaScriptなのです。また最近ではサーバーサイド、スマホアプリ、デスクトップアプリでも使われています。',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],           
            [
                'user_id' => 1,
                'name' => 'PHP',
                'text' => 'PHPはHTMLに埋め込むことができるため、Web開発でよく使用されるスクリプト言語です。Web開発でよく使用されるスクリプト言語に、JavaScriptがありますが、PHPとJavaScriptの大きな違いは、そのコードがどこで実行されるかにあります。PHPはサーバーサイドでコードを実行します。クライアントサイドはその結果のみを受け取るため、どのようなコードで導き出された結果なのか見ることができません。',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'name' => 'Laravel',
                'text' => 'そんなPHPのフレームワークとして高い知名度を誇るのが、この「Laravel」です。2011年にリリースされた比較的新しいフレームワークながら、PHPにおけるフレームワークの中では、世界的に普及しています。',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'name' => 'SQL',
                'text' => 'SQL文は、データベースに指示を出すための命令文で、SQLという言語によって記述されます。SQLは、世界初のリレーショナルデータベース管理システムが誕生した際に用いられた言語をもとに作られています。',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'name' => 'React',
                'text' => '現在、数多くあるJavaScriptのフレームワーク・ライブラリ群の中でも、Webサービスにおいて世界的に圧倒的な導入率を誇るのがReactです。日本でもReactの人気が高まってきています。Reactは、コーディングコストが少なく、開発規模が大きくなっても管理しやすいなど、これまでのフレームワーク・ライブラリとはまったく異なる特徴が注目されています。',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'name' => 'WordPress',
                'text' => 'WordPress（ワードプレス）はPHPというプログラミング言語で作られているCMS（コンテンツマネジメントシステム）の一種で、ブログやWebサイトを作る事ができます。世界中で利用されているWordPressですが、日本でも人気が高く、利用されたCMSのうちWordPressが8割を占めるほどです。個人ではアフィリエイト等のブログに、企業ではWebサイトや記事メディアと広く使われています。 ',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'name' => 'GitHub',
                'text' => 'GitHubとは、開発プロジェクトのソースコードを管理できるWEBサービスです。GitHubにはソースコードを共有できる様々な機能があり、プロジェクトのソースコードの管理にかかるコストを削減できます。ソースコードの公開や履歴の閲覧、バグ管理などの機能があり、開発者にとって、大変便利なサービスです。',
                'status' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('languages')->insert($param);
        }
    }
}

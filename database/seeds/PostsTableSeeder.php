<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'post_title' => 'あみプレミアム・アウトレット クリスマス イルミネーション',
                'post_place' => '茨城県',
                'post_content' => '昼と夜で印象の変わるツリーが魅了'
            ],

            [
                'post_title' => '斎藤亮輔展 Reframing',
                'post_place' => '茨城県',
                'post_content' => '不思議な静けさに包まれる若手作家の作品展'
            ],

            [
                'post_title' => '第9回光がつくる“Art”水郷桜イルミネーション',
                'post_place' => '茨城県',
                'post_content' => '日本最大級の風車イルミが登場'
            ],

            [
                'post_title' => '大子来人2020 －袋田の滝ライトアップ－',
                'post_place' => '茨城県',
                'post_content' => '国名勝 袋田の滝のライトアップ'
            ]
        ];
        foreach ($posts as $post) {
            DB::table('posts')->insert([
                    'post_title' => $post['post_title'],
                    'post_event_day' => Carbon::now(),
                    'post_place' => $post['post_place'],
                    'post_content' => $post['post_content'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
            ]);
        };
    }
}

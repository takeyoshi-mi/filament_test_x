<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => '田中太郎',
                'description' => '数学が得意で、将来は工学部を志望している。部活動はサッカー部に所属。'
            ],
            [
                'name' => '佐藤花子',
                'description' => '英語と文学に興味があり、海外留学を希望している。図書委員会の委員長を務める。'
            ],
            [
                'name' => '山田次郎',
                'description' => '理科実験が好きで、特に化学に熱心。科学部で様々な実験に取り組んでいる。'
            ],
            [
                'name' => '鈴木美咲',
                'description' => '芸術分野に才能があり、美術コンクールで入賞経験あり。美術部部長。'
            ],
            [
                'name' => '高橋健一',
                'description' => 'スポーツ万能で、陸上競技では県大会出場経験がある。生徒会副会長。'
            ],
            [
                'name' => '渡辺あゆみ',
                'description' => '音楽が得意でピアノとバイオリンを演奏できる。吹奏楽部で活動中。'
            ],
            [
                'name' => '小林大輔',
                'description' => 'コンピュータプログラミングに興味があり、独学でアプリ開発を学んでいる。'
            ],
            [
                'name' => '加藤明美',
                'description' => '歴史研究が趣味で、特に日本史に詳しい。歴史研究会に所属している。'
            ]
        ];

        foreach ($students as $student) {
            \App\Models\Student::create($student);
        }
    }
}

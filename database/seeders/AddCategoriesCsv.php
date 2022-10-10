<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class AddMenusCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("メニューの作成を開始します...");

        $memberSplFileObject = new \SplFileObject(__DIR__ . './csv/categories.csv');
        $memberSplFileObject->setFlags(
            \SplFileObject::READ_CSV |
            \SplFileObject::READ_AHEAD |
            \SplFileObject::SKIP_EMPTY |
            \SplFileObject::DROP_NEW_LINE
        );

        $count = 0;
        foreach ($memberSplFileObject as $key => $row) {
            if ($key === 0) {
                continue;
            }

            Category::create([
                'name' => trim($row[0]),
            ]);
            $count++;
        }

        $this->command->info("メンバーを{$count}件、作成しました。");
    }
}

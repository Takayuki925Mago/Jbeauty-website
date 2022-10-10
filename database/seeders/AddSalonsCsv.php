<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salon;

class AddSalonsCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("メニューの作成を開始します...");

        $memberSplFileObject = new \SplFileObject(__DIR__ . './csv/salons.csv');
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

            Salon::create([
                'salon_name' => trim($row[1]),
                'salon_info' => trim($row[4]),
                'salon_other' => trim($row[5]),
                'salon_instagram' => trim($row[6]),
                'salon_facebook' => trim($row[7]),
                'salon_twitter' => trim($row[8]),
                'salon_tiktok' => trim($row[9]),
                'salon_youtube' => trim($row[10]),
                'other' => trim($row[11]),
                'salon_logo' => trim($row[15]),
            ]);
            $count++;
        }

        $this->command->info("メンバーを{$count}件、作成しました。");
    }
}

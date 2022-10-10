<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Professional;

class AddProfessionalsCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("Professionalsの作成を開始します...");

        $memberSplFileObject = new \SplFileObject(__DIR__ . './csv/professionals.csv');
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

            Professional::create([
                'professional_name' => trim($row[2]),
                'salon_id' => trim($row[15]),
                'diploma' => trim($row[5]),
                'message' => trim($row[6]),
                'professional_instagram' => trim($row[7]),
                'professional_facebook' => trim($row[8]),
                'professional_twitter' => trim($row[9]),
                'professional_tiktok' => trim($row[10]),
                'professional_youtube' => trim($row[11]),
                'professional_image' => trim($row[14]),
            ]);
            $count++;
        }

        $this->command->info("メンバーを{$count}件、作成しました。");
    }
}

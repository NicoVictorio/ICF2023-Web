<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seminars;

class SeminarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seminar = [
            [
                'nama' => 'CHATGPT allies or enemies',
            ],
            [
                'nama' => 'How to be the Main Character',
            ],
            [
                'nama' =>'UI/UX in Digital Product',
            ],
            [
                'nama' => 'Navigating the Data Jungle',
            ],
            [
                'nama' => 'Behind the Production of Gamecom Team',
            ],
        ];
        foreach ($seminar as $value)
        {
            Seminars::create($value);
        }
    }
}

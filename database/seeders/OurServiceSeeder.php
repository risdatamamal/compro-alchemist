<?php

namespace Database\Seeders;

use App\Models\OurService;
use Illuminate\Database\Seeder;

class OurServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Our Services',
                'desc' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.'
            ],
        ];

        foreach ($data as $key => $value) {
            OurService::create($value);
        }
    }
}

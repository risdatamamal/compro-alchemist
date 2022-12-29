<?php

namespace Database\Seeders;

use App\Models\Attorneys;
use Illuminate\Database\Seeder;

class AttorneysSeeder extends Seeder
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
                'title' => 'Attorneys',
                'desc' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.'
            ],
        ];

        foreach ($data as $key => $value) {
            Attorneys::create($value);
        }
    }
}

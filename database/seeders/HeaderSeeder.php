<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
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
                'title' => 'Alchemist Law Office',
                'subtitle' => 'Description Header',
                'button' => 'FREE CONSULTATION'
            ],
        ];

        foreach ($data as $key => $value) {
            Header::create($value);
        }
    }
}

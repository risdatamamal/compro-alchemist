<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
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
                'title' => 'About Us',
                'desc' => 'Description About',
                'video_url' => 'https://www.youtube.com/embed/9jo51nJrO0k'
            ],
        ];

        foreach ($data as $key => $value) {
            About::create($value);
        }
    }
}

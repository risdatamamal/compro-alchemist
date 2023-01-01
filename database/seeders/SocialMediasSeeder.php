<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediasSeeder extends Seeder
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
                'facebook' => 'https://www.facebook.com/yourname',
                'twitter' => 'https://twitter.com/yourname',
                'linkedin' => 'https://www.linkedin.com/company/yourname',
                'instagram' => 'https://www.instagram.com/yourname',
            ],
            [
                'facebook' => 'https://www.facebook.com/yourname',
                'twitter' => 'https://twitter.com/yourname',
                'linkedin' => 'https://www.linkedin.com/company/yourname',
                'instagram' => 'https://www.instagram.com/yourname',
            ],
        ];

        foreach ($data as $key => $value) {
            SocialMedia::create($value);
        }
    }
}

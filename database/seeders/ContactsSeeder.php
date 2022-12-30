<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
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
                'title' => 'Contact',
                'desc' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                'email' => 'yourcompany@email.com',
                'phone' => '62xxxxxxxxxx',
                'whatsapp' => '62xxxxxxxx',
                'address' => 'San Francisco, CA 4th Floor8 Lower San Francisco street, M1 50F',
            ],
        ];

        foreach ($data as $key => $value) {
            Contact::create($value);
        }
    }
}

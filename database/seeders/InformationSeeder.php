<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::updateOrCreate(
            ['id' => 1],
            [
                'title'                => 'Step Up Training',
                'address'              => 'Jl. Pendidikan No. 123, Medan, Sumatera Utara',
                'email'                => 'info@stepuptraining.id',
                'whatsapp'             => '6281234567890',

                'footer_title'         => 'Step Up Training',
                'footer_contact_title' => 'Hubungi Kami',

                'facebook'             => 'https://facebook.com/stepuptraining',
                'instagram'            => 'https://instagram.com/stepuptraining',
                'youtube'              => 'https://youtube.com/@stepuptraining',
                'tiktok'               => 'https://tiktok.com/@stepuptraining',
            ]
        );
    }
}

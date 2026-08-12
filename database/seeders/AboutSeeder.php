<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::updateOrCreate(
            ['id' => 1],
            [
                'image' => 'images/default-about.jpg',

                'small_title' => 'Tentang Kami',

                'title_text' => 'Membangun Masa Depan Melalui Pendidikan Berkualitas',

                'about_text' => 'Kami hadir untuk memberikan pendidikan dan pelatihan berkualitas yang membantu setiap individu meningkatkan kemampuan, mengembangkan potensi, dan mencapai tujuan mereka.',

                'item_title_1' => 'Pengalaman Terpercaya',

                'item_subtitle_1' => 'Didukung oleh tenaga profesional dan berpengalaman.',

                'item_title_2' => 'Pembelajaran Berkualitas',

                'item_subtitle_2' => 'Materi pembelajaran disusun secara praktis dan mudah dipahami.',

                'cta_text' => 'Pelajari Selengkapnya',

                'cta_link' => 'https://google.com',
            ]
        );
    }
}

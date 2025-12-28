<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile; // Pastikan ini di-import

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Profile::create([
            'name' => 'FARHAN KHOLID',
            'headline' => 'HYBRID VISUAL DESIGNER & FRONT-END ENGINEER',
            // Kita gunakan format yang bersih untuk About
            'about' => "Professional with 6+ years of experience in Visual Design, currently expanding expertise into Software Engineering. Skilled in bridging the gap between aesthetic sensitivity and technical feasibility.",
            'email' => 'farhankholid20@gmail.com',
            'linkedin_url' => 'https://linkedin.com/in/farhan-kholid',
            'github_url' => 'https://github.com/amaheeeen'
        ]);
    }
}